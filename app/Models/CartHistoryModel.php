<?php

namespace App\Models;

use CodeIgniter\Model;

class CartHistoryModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'seo_cart_history';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['quantity', 'customer_id', 'status','product_id','updated_at', 'created_at'];

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


    public function getCountry(){
        $db = db_connect();
        //$sql = "Select id,name from countries WHERE name IN ('Afghanistan', 'Australia', 'Bhutan','China','India', 'Nepal', 'United Arab Emirates', 'United Kingdom','United States') ";
        $sql = "Select id,name from countries WHERE name ='India'";
        $result = $db->query($sql);
        return $result->getResult();
    }
    public function getState($country_id = 101){
        $db = db_connect();
        //$sql = "Select id,name from countries WHERE name IN ('Afghanistan', 'Australia', 'Bhutan','China','India', 'Nepal', 'United Arab Emirates', 'United Kingdom','United States') ";
        $sql = "Select id,name from states WHERE country_id =$country_id ";
        $result = $db->query($sql);        
        return $result->getResult();
    }
}
