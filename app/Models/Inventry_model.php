<?php
namespace App\Models;

use CodeIgniter\Model;


class Inventry_model extends Model
{   
    protected $table      = 'seo_inventery';
    protected $primaryKey = 'id';
    protected $allowedFields = [
    'purchase_inventry',
    'per_inventry_price',  
    'total_amount', 
    'purchase_date',
    'payment_id', 
    'status',   
    'created_by',
    'updated_by',
    'created_at',
    'updated_at'];


    function __construct()
    {
        $this->table = 'seo_inventery';       
    }

    function save_buyInventory($data){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }  
    }

    function getAll_inventry($id){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('*');        
        $builder->where('created_by', $id);
        $builder->orderBy('id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }



    


   

}
