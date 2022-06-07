<?php
namespace App\Models;

use CodeIgniter\Model;


class General_model extends Model
{
    protected $table      = 'seo_business';
    protected $primaryKey = 'id';
    protected $allowedFields = ['business_type','user_id', 'status', 'created_at', 'update_at'];

    function getallBusiness($id){       
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_business');     
        $builder->where('user_id', $id);
        $builder->orderBy('business_type','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function save_country($data){      
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_country');     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }       
    }

    function allcountry($id){       
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_country');     
        $builder->where('created_by',$id);
        $builder->orderBy('country_name','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function edit_country($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_country');     
        $builder->where('id', $id);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow();
        } else {
            return $this->db->error();
        } 
    }

    function update_country($id, $data){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_country');
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function delete_country($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_country');     
        $builder->where('id', $id);
        $res =  $builder->delete();  
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        } 
    }
    
    function allstate($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_state');  
        $builder->select(' seo_state.id, seo_state.state_name, seo_state.country_id, seo_state.created_by, seo_state.status, seo_country.country_name'); 
        $builder->join('seo_country','seo_state.country_id = seo_country.id' );  
        $builder->where('seo_state.created_by', $id);
        $builder->orderBy('seo_state.state_name','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function save_state($data){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_state');     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }       
    }

    function update_state($id, $data){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_state');
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function edit_state($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_state');     
        $builder->where('id', $id);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow();
        } else {
            return $this->db->error();
        } 
    }

    function delete_state($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_state');     
        $builder->where('id', $id);
        $res =  $builder->delete();  
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        } 
    } 

    function allActiveState($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_state');  
        $builder->select('*');       
        $builder->where(['created_by'=> $id, 'status' => '1']);
        $builder->orderBy('seo_state.state_name','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function allActivecountry($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_country');     
        $builder->where(['created_by'=> $id, 'status'=>1]);
        $builder->orderBy('country_name','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function save_city($data){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_city');     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }   
    }

    function allcity($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_city');  
        $builder->select('seo_city.id, seo_city.city_name, seo_city.state_id, seo_city.created_by,seo_city.status, seo_state.state_name'); 
        $builder->join('seo_state','seo_city.state_id = seo_state.id' );  
        $builder->where('seo_city.created_by', $id);
        $builder->orderBy('seo_city.city_name','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function edit_city($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_city');     
        $builder->where('id', $id);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow();
        } else {
            return $this->db->error();
        } 
    }

    function update_city($id, $data){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_city');
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function delete_city($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_city');     
        $builder->where('id', $id);
        $res =  $builder->delete();  
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        } 
    }
 
    function alllocality($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_locality');  
        $builder->select('seo_locality.id, seo_locality.locality_name, seo_locality.city_id, seo_locality.created_by,seo_locality.status, seo_city.city_name'); 
        $builder->join('seo_city','seo_locality.city_id = seo_city.id' );  
        $builder->where('seo_locality.created_by', $id);
        $builder->orderBy('seo_locality.locality_name','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function allActiveCity($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_city');     
        $builder->where(['created_by'=> $id, 'status'=>1]);
        $builder->orderBy('city_name','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }  

    function save_locality($data){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_locality');     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }  
    }

    function edit_locality($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_locality');     
        $builder->where('id', $id);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow();
        } else {
            return $this->db->error();
        } 
    }

    function update_locality($id, $data){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_locality');
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function delete_locality($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_locality');     
        $builder->where('id', $id);
        $res =  $builder->delete();  
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        } 
    }

    function allActiveLocality($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_locality');     
        $builder->where(['created_by'=> $id, 'status'=>1]);
        $builder->orderBy('locality_name','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }
    
    function allpincode($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_pincode');  
        $builder->select('seo_pincode.id, seo_pincode.pincode, seo_pincode.locality_id, seo_pincode.created_by,seo_pincode.status, seo_locality.locality_name'); 
        $builder->join('seo_locality','seo_pincode.locality_id = seo_locality.id' );  
        $builder->where('seo_pincode.created_by', $id);
        $builder->orderBy('seo_pincode.pincode','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function save_pincode($data){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_pincode');     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }  
    }

    function edit_pincode($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_pincode');     
        $builder->where('id', $id);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow();
        } else {
            return $this->db->error();
        } 
    }

    function update_pincode($id, $data){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_pincode');
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function delete_pincode($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_pincode');     
        $builder->where('id', $id);
        $res =  $builder->delete();  
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        } 
    }

    function allActivepincode($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_pincode');     
        $builder->where(['created_by'=> $id, 'status'=>1]);
        $builder->orderBy('pincode','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function getActiveSateById($user_id, $id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_state');     
        $builder->where(['created_by'=> $user_id, 'status'=>1,'country_id' =>$id]);
        $builder->orderBy('state_name','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function getActiveCityById($user_id, $id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_city');     
        $builder->where(['created_by'=> $user_id, 'status'=>1,'state_id' =>$id]);
        $builder->orderBy('city_name','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function getActiveLocalityById($user_id, $id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_locality');     
        $builder->where(['created_by'=> $user_id, 'status'=>1,'city_id' =>$id]);
        $builder->orderBy('locality_name','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function getActivePincodeById($user_id, $id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_pincode');     
        $builder->where(['created_by'=> $user_id, 'status'=>1,'locality_id' =>$id]);
        $builder->orderBy('pincode','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }


}
