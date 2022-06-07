<?php
namespace App\Models;

use CodeIgniter\Model;


class Appearance_model extends Model
{   
    protected $table      = 'seo_header_footer';
    protected $primaryKey = 'id';
    protected $allowedFields = ['header_background',
    'header_text',  
    'navbar_background', 
    'navbar_text',
    'searchbar_color',
    'footer_background',
    'footer_text_color',
    'footer_text',
    'copyright_background',
    'copyright_text',
    'copyright_text_color',
    'sitemap',
    'created_by',
    'updated_by',    
    'status', 
    'created_at', 
    'updated_at'];

    function __construct(){
        $this->table = 'seo_header_footer';       
    }
   

    function header_footer_save($data){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        } 
    }


    function get_header_footer($id){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('*'); 
        $builder->where('created_by', $id);      
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow();
        } else {
            return $this->db->error();
        } 
    }

    function header_footer_update($id, $data){       

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


    function get_sorting_order($menu_id, $submenu_id, $section_id,$section_title, $userid){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_arrange_section'); 
        $builder->select('*'); 
        $builder->where(['created_by'=> $userid, 'menu_id'=>$menu_id, 'submenu_id' => $submenu_id, 'section_id'=> $section_id,'section_title'=> $section_title]);      
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow('id');
        } else {
            return $this->db->error();
        } 
    }


    function save_arrange_sorting($data){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_arrange_section');     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        } 
    }

    function update_arrange_sorting($data, $id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_arrange_section');   
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function findAllData(){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_header_footer');   
        $res =  $builder->get();  
        if ($res) {
            return $res->getRowArray();
        } else {
            return $this->db->error();
        }
    }

    

 

}
