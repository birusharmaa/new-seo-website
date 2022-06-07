<?php

namespace App\Models;

use PhpParser\Node\Expr\Print_;

class Users_model extends Crud_model
{

    protected $table = null;

    function __construct(){
        $this->table = 'seo_users';
        parent::__construct($this->table);
        $this->db = db_connect();
    }

    function authenticate($email, $password){
        
        $db = db_connect();
        if ($email) {
            $email = $this->db->escapeString($email);
        }
        $sql = "select * from $this->table where user_email= '$email' ";       
        $result = $db->query($sql);            
        if (count($result->getResult()) < 1) {
            return 'notEmail';
        }
        $user_info = $result->getRow();
        //check if anyone of them is correct
        if(base64_encode($password) == $user_info->user_password) {
            if($user_info->user_status == '1'){
                $session = \Config\Services::session();
                $newdata = [
                    'user_id' =>  $user_info->id,
                    'user_name' =>   $user_info->user_name,                    
                    'user_email' =>  $user_info->user_email,  
                    'business_logo' =>  $user_info->business_logo, 
                    'current_theme' => $user_info->current_theme,
                    'logged_in' => true,
                ];                 
                $session->set('login_user', $newdata);  
                return true;
            }else{
                return 'inactive';
            }
        }
    }


    private function _client_can_login($user_info)
    {
        //check client login settings
        // if ($user_info->user_type === 2 && get_setting("disable_client_login")) {
        //     return false;
        // } else if ($user_info->user_type === 2) {
        //user can't be loged in if client has deleted
        // $clients_table = $this->db->prefixTable('employees');

        // $sql = "SELECT $clients_table.id
        //         FROM $clients_table
        //         WHERE $clients_table.id = $user_info->client_id AND $clients_table.deleted=0";
        // $client_result = $this->db->query($sql);

        // if ($client_result->resultID->num_rows !== 1) {
        //     return false;
        // }
        // }
    }

    function login_user_id()
    {
        $session = \Config\Services::session();
        if ($session->has("login_user")) {
            $sess = $session->get("login_user");
            return $sess['user_id'];
        } else {
            return false;
        }
        //return $session->has("login_user") ? $session->has("user_id") : "";
    }

    function sign_out()
    {
        $session = \Config\Services::session();
        $session->destroy();
        app_redirect('signin');
    }

    function is_email_exists($email, $id = 0)
    {
        $users_table = 'seo_users';
        $id = $id ? $this->db->escapeString($id) : $id;

        $sql = "SELECT $users_table.* FROM $users_table   
        WHERE $users_table.user_status=1 AND $users_table.user_email='$email'";

        $result = $this->db->query($sql);

        if ($result->resultID->num_rows && $result->getRow()->id != $id) {
            return $result->getRow();
        } else {
            return false;
        }
    }


    function is_mobile_exists($moible, $id = 0)
    {

        $id = $id ? $this->db->escapeString($id) : $id;

        $sql = "SELECT $this->table.* FROM $this->table   
        WHERE $this->table.user_status=1 AND $this->table.user_phone='$moible'";
        $result = $this->db->query($sql);
        if ($result->resultID->num_rows == 1 && $result->getRow()->id != $id) {
            return $result->getRow();
        } else {
            return false;
        }
    }

    function get_job_info($user_id)
    {
        parent::use_table("team_member_job_info");
        return parent::get_one_where(array("user_id" => $user_id));
    }

    function save_job_info($data)
    {
        parent::use_table("team_member_job_info");
        //check if job info already exists
        $where = array("user_id" => get_array_value($data, "user_id"));
        $exists = parent::get_one_where($where);
        if ($exists->user_id) {
            //job info found. update the record
            return parent::update_where($data, $where);
        } else {
            //insert new one
            return parent::ci_save($data);
        }
    }

    function get_team_members($member_ids = "")
    {
        $users_table = $this->db->prefixTable('users');
        $sql = "SELECT $users_table.*
        FROM $users_table
        WHERE $users_table.deleted=0 AND $users_table.user_type='staff' AND FIND_IN_SET($users_table.id, '$member_ids')
        ORDER BY $users_table.first_name";
        return $this->db->query($sql);
    }

    function get_access_info($user_id = 0)
    {
        // print_r($user_id);
        // die;
        $users_table = 'users';
        $roles_table = 'roles';
        $employee_table = 'employees';

        if (!$user_id) {
            $user_id = 0;
        }

        // $sql = "SELECT * FROM `kk_users` WHERE user_id=$user_id";

        $builder = $this->db->table('users');
        $builder->select('users.user_id, users.user_first_name, users.user_last_name,users.user_email,users.user_entity_id,
        users.user_role_id,roles.role_title,roles.role_permission,users.user_type,users.is_admin,user_access_permissions.uap_permission as access_right');
        $builder->join('employees', 'employees.id = users.user_entity_id', 'left');
        $builder->join('roles', 'roles.role_id = users.user_role_id', 'left');
        $builder->join('user_access_permissions', 'user_access_permissions.uap_user_id = users.user_id', 'left');
        $builder->where('users.user_id', $user_id);
        $query = $builder->get();
        return $query->getRow();
    }

    function get_team_members_and_clients($user_type = "", $user_ids = "", $exlclude_user = 0)
    {

        $users_table = $this->db->prefixTable('users');
        $clients_table = $this->db->prefixTable('clients');

        $where = "";
        if ($user_type) {
            $where .= " AND $users_table.user_type='$user_type'";
        } else {
            $where .= " AND $users_table.user_type!='lead'";
        }

        if ($user_ids) {
            $where .= "  AND FIND_IN_SET($users_table.id, '$user_ids')";
        }

        if ($exlclude_user) {
            $where .= " AND $users_table.id !=$exlclude_user";
        }

        $sql = "SELECT $users_table.id,$users_table.client_id, $users_table.user_type, $users_table.first_name, $users_table.last_name, $clients_table.company_name,
            $users_table.image,  $users_table.job_title, $users_table.last_online
        FROM $users_table
        LEFT JOIN $clients_table ON $clients_table.id = $users_table.client_id AND $clients_table.deleted=0
        WHERE $users_table.deleted=0 AND $users_table.status='active' $where
        ORDER BY $users_table.user_type, $users_table.first_name ASC";
        return $this->db->query($sql);
    }

    /* return comma separated list of user names */

    function user_group_names($user_ids = "")
    {
        $users_table = $this->db->prefixTable('users');

        $sql = "SELECT GROUP_CONCAT(' ', $users_table.first_name, ' ', $users_table.last_name) AS user_group_name
        FROM $users_table
        WHERE FIND_IN_SET($users_table.id, '$user_ids')";
        return $this->db->query($sql)->getRow();
    }

    /* return list of ids of the online users */

    function get_online_user_ids()
    {
        $users_table = $this->db->prefixTable('users');
        $now = get_current_utc_time();

        $sql = "SELECT $users_table.id 
        FROM $users_table
        WHERE TIMESTAMPDIFF(MINUTE, users.last_online, '$now')<=0";
        return $this->db->query($sql)->getResult();
    }

    function get_active_members_and_clients($options = array())
    {
        $users_table = $this->db->prefixTable('users');
        $clients_table = $this->db->prefixTable('clients');

        $where = "";

        $user_type = get_array_value($options, "user_type");
        if ($user_type) {
            $where .= " AND $users_table.user_type='$user_type'";
        }

        $exclude_user_id = get_array_value($options, "exclude_user_id");
        if ($exclude_user_id) {
            $where .= " AND $users_table.id!=$exclude_user_id";
        }

        $show_own_clients_only_user_id = get_array_value($options, "show_own_clients_only_user_id");
        if ($user_type == "client" && $show_own_clients_only_user_id) {
            $where .= " AND $users_table.client_id IN(SELECT $clients_table.id FROM $clients_table WHERE $clients_table.deleted=0 AND $clients_table.created_by=$show_own_clients_only_user_id)";
        }

        $sql = "SELECT CONCAT($users_table.first_name, ' ',$users_table.last_name) AS member_name, $users_table.last_online, $users_table.id, $users_table.image, $users_table.job_title, $users_table.user_type, $clients_table.company_name
        FROM $users_table
        LEFT JOIN $clients_table ON $clients_table.id = $users_table.client_id AND $clients_table.deleted=0
        WHERE $users_table.deleted=0 $where
        ORDER BY $users_table.last_online DESC";
        return $this->db->query($sql);
    }

    function count_total_contacts($options = array())
    {
        $users_table = $this->db->prefixTable('users');
        $clients_table = $this->db->prefixTable('clients');

        $where = "";
        $show_own_clients_only_user_id = get_array_value($options, "show_own_clients_only_user_id");
        if ($show_own_clients_only_user_id) {
            $where .= " AND $users_table.client_id IN(SELECT $clients_table.id FROM $clients_table WHERE $clients_table.deleted=0 AND $clients_table.created_by=$show_own_clients_only_user_id)";
        }

        $last_online = get_array_value($options, "last_online");
        if ($last_online) {
            $where .= " AND DATE($users_table.last_online)>='$last_online'";
        }

        $sql = "SELECT COUNT($users_table.id) AS total
        FROM $users_table 
        WHERE $users_table.deleted=0 AND $users_table.user_type='client' $where";
        return $this->db->query($sql)->getRow()->total;
    }

    private function make_quick_filter_query($filter, $users_table)
    {
        $query = "";

        if ($filter == "logged_in_today" || $filter == "logged_in_seven_days") {
            $last_online = get_today_date();
            if ($filter == "logged_in_seven_days") {
                $last_online = subtract_period_from_date(get_today_date(), 7, "days");
            }

            $query = " AND $users_table.id IN(SELECT $users_table.id FROM $users_table WHERE $users_table.deleted=0 AND $users_table.user_type='client' AND DATE($users_table.last_online)>='$last_online') ";
        }

        return $query;
    }

    public function updatePassword($data = null,  $conditions = null)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_users');
        $builder->set($data);
        $builder->where('id', $conditions);
        $res =  $builder->update();

        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function getUserInfo($email)
    {
        $db = db_connect();
        if ($email) {
            $email = $this->db->escapeString($email);
        }
        $sql = "select * from $this->table where user_email= '$email' and user_status=1";
        $result = $db->query($sql);
        if (count($result->getResult()) !== 1) {
            return false;
        }
        $user_info = $result->getRow();
        return $user_info;
    }

    function getUserInfoId($id)
    {
        $db = db_connect();
        $sql = "select * from $this->table where id= $id";
        $result = $db->query($sql);
        if (count($result->getResult()) !== 1) {
            return false;
        } else {
            $user_info = $result->getRow();
            return $user_info;
        }
    }

    function uploadImage($id, $filepath)
    {
        $db = db_connect();
        $sql = "Update $this->table set company_logo ='$filepath' where id= $id";
        $result = $db->query($sql);
        return $result;
    }

    function UpdateUser($id, $data)
    {

        $db      = \Config\Database::connect();
        $builder = $db->table('seo_users');
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function update_theme($id, $color)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_users');
        $builder->set('current_theme', $color);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function getThemeColor($id = 0)
    {
        $db = db_connect();
        $sql = "select current_theme from seo_users where id= $id";
        $result = $db->query($sql);
        if ($result == false) {
            return false;
        } else {
            $user_info = $result->getRow();
            return $user_info;
        }
    }

    function other_business_info($id, $data)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_users');
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function other_contact($id, $data)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_users');
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function other_currency($id, $data)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_users');
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function theme_color_form($id, $data)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_users');
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function razorpay_settings($id, $data)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_users');
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function upload_business_logo($id, $filepath)
    {
        $db = db_connect();
        $sql = "Update $this->table set business_logo ='$filepath' where id= $id";
        $result = $db->query($sql);
        return $result;
    }

    function upload_business_icon($id, $filepath){
        $db = db_connect();
        $sql = "Update $this->table set business_icon ='$filepath' where id= $id";
        $result = $db->query($sql);
        return $result;
    }

    public function getUsers(){
        $db = db_connect();
        $sql = "SELECT * FROM seo_users";
        $result = $db->query($sql);
        return $result->getResult();
    }

    public function updateUserPassword($email=null, $password){
        $db = db_connect();
        $builder = $db->table('seo_users');
        $data = ['user_password' => base64_encode($password)];
        $builder->set($data);
        //$builder->where('id', $conditions);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    //Get user details
    public function getUserDetails(){
        $sql = "SELECT * FROM seo_users ORDER BY id";
        $result = $this->db->query($sql);
        return $result->getRowArray();
    }

}
