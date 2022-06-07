<?php

namespace App\Models;

use CodeIgniter\Model;

class ImagesGallary extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'seo_images_gallery';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['title', 'image', 'created_by', 'updated_by', 'status'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules = [
        //'email' => 'required|valid_email|is_unique[users.email,id,{id}]',
        //'title' => 'required|is_unique[seo_images_gallery.title,id,{id}]'
    ];

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

    protected function callBeforeUpdate(array $data)
    {
        //log_message("info", "Running method before update ". json_encode($data));
        //log_message("info", "Running method before update");
        $model = new ImagesGallary();
        $check = $model->where(['title'=> $data['data']['title'], 'id !=' => $data['id'][0]])->findAll();       
        if(!empty($check)){
            return [];
            //echo json_encode(['status' => false, 'validation' => true, 'message' => 'Please enter title']);
        }else{
            return $data;
        }
    }
}
