<?php
namespace App\Models;

use CodeIgniter\Model;


class Enquiry_model extends Model
{   
    protected $DBGroup          = 'default';
    protected $table            = 'seo_enquiry';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'email', 'phone', 'source', 'message', 'status', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    function __construct()
    {
        $this->table = 'seo_enquiry';       
    }
   

    function get_allEnquiry(){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('*'); 
        $builder->orderBy('id','DESC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    
    function get_TopFiveEnquiry(){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('*'); 
        $builder->orderBy('id','DESC');
        $builder->limit(5);
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function get_TopEnquiry(){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('*'); 
        $builder->orderBy('id','DESC');
        $builder->limit(10);
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function get_totalCount(){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('id'); 
        $builder->countAll();
        $res =  $builder->get();       
        if ($res) {
            return count($res->getResult());
        } else {
            return $this->db->error();
        } 
    }


}
