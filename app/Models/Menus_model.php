<?php
namespace App\Models;

use CodeIgniter\Model;


class Menus_model extends Model
{   
    protected $table      = 'seo_menus';
    protected $primaryKey = 'id';
    protected $allowedFields = ['menu_name',
    'default_menu',  
    'sub_menu', 
    'footer_menu',
    'sorting_order',
    'created_by',
    'update_by',
    'status',
    'created_at',
    'updated_at'];

    function __construct()
    {
        $this->table = 'seo_menus';       
        $this->db      = \Config\Database::connect();
    }

    function save_menus($data){
        $db          = \Config\Database::connect();
        $builder     = $db->table($this->table);
        
        $query       = $builder->getWhere(['menu_name' => $data['menu_name'] ]);
        $res         = $query->getRowArray();

        if(empty($res)){
            $res = "";
            $query       = $builder->getWhere(['menu_name' => 'Contact']);
            $res         = $query->getRowArray();
            $id          = $res['id'];
            $default_menu= $res['default_menu'];
            $update_by   = $res['update_by'];
            $order       = $res['sorting_order'];
            if(!empty($data) && !empty($id)){
                $update_data = [
                    'menu_name' => $data['menu_name'],
                    'default_menu'  => 0,
                    'sub_menu'  => 0,
                    'footer_menu' => 0,
                    'sorting_order' => $order,
                    'update_by' => $data['created_by'],
                    'updated_at'=> date('y-m-d H:i:s'),
                ];
                
                $builder->where('id', $id);
                $res = "";
                $insert_data = [
                    'menu_name'    => 'Contact',
                    'default_menu' => 1,
                    'created_by'   => $data['created_by'],
                    'sorting_order'=> $order+1,
                ];
                if($builder->update($update_data)){
                    $res =  $builder->insert($insert_data);
                }
                if($res){
                    return 'save';
                } else {
                    return $this->db->error();
                } 
            }
            return false;
        }else{
            return 'exists';
        }
        
    }

    
    function get_all_menus($id){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);     
        $builder->where(['sub_menu' => 0, 'footer_menu' => 0, 'created_by'=> $id ]);
        $builder->orderBy('id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function get_default_menu($id){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);     
        $builder->where(['default_menu' => 0, 'sub_menu' => 0, 'footer_menu' => 0, 'created_by'=> $id ]);
        $builder->orderBy('id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }
    
    function save_default_menus($data, $id){       

        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);     
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function get_default_menulist($id){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);     
        $builder->where(['default_menu' => '1', 'sub_menu' => '0', 'footer_menu' => '0', 'created_by'=> $id ]);
        $builder->orderBy('id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function save_sub_menus($data){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $query       = $builder->getWhere(['menu_name' => $data['menu_name'] ]);
        $res         = $query->getRowArray();
        
        if(empty($res)){
            $res =  $builder->insert($data);
            if ($res) {
                return 'save';
            } else {
                return $this->db->error();
            }
        }else{
            return 'exists';
        }
    }
   
    function save_footer_menus($data){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        } 
    }

    function save_menus_sortings($menue_id, $order, $usre_id){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);    
        $builder->set('sorting_order',$order); 
        $builder->where(['id' => $menue_id, 'created_by' => $usre_id]);
        $builder->update();
        $res =  $builder->get();  
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function get_all_menus_bysorting($id){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);     
        $builder->where(['sub_menu' => 0, 'footer_menu' => 0, 'created_by'=> $id ]);
        $builder->orderBy('sorting_order','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }
}
