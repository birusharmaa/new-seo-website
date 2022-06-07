<?php
namespace App\Models;

use CodeIgniter\Model;


class Plugin_model extends Model
{   
    protected $table      = 'seo_plugin';
    protected $primaryKey = 'id';
    protected $allowedFields = ['first_name',
    'last_name',  
    'email', 
    'password',
    'phone', 
    'business_name', 
    'business_type',
    'address',
    'country',
    'state',
    'city',
    'locality',
    'pin_code',
    'website_domain',
    'is_installed',
    'status', 
    'created_by',
    'updated_by',
    'created_at', 
    'update_at'];


    function __construct()
    {
        $this->table = 'seo_plugin';       
    }

    function save_plugin($data){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }  
    }

    function getAll_plugin($id){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('*');        
        $builder->where('created_by', $id);
        $builder->orderBy('first_name','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function get_plugin($user_id, $id){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('*');        
        $builder->where(['created_by'=> $user_id, 'id' => $id]);        
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow();
        } else {
            return $this->db->error();
        } 
    }

    function get_user_info($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_users');
        $builder->select('*');        
        $builder->where('id', $id);        
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow();
        } else {
            return $this->db->error();
        } 
    }   

    function plugin_pass_update($data, $id){
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

    function plugin_info_update($data, $id){
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

    function pluginInfo_update($data, $id){
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

}
