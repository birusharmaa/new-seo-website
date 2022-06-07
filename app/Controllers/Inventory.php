<?php

namespace App\Controllers;
use App\Models\Inventry_model;


class Inventory extends BaseController
{

    function __construct()
    {
        helper("general");
        $request = \Config\Services::request();
        $session = \Config\Services::session();
        $validation =  \Config\Services::validation();
        $this->validation = $validation; 
        $this->request = $request;
        $this->session = $session;
        $model = new Inventry_model();
        $this->model = $model;       
        date_default_timezone_set("Asia/Kolkata");
        login_redirect();
              
    }


    public function index()
    {  
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data['inventry'] = $this->model->getAll_inventry($user_data['user_id']);
        $data['color'] =  getThemeColor($user_data["user_id"]);       
        $data['title'] = 'Buy Inventory';
        return view('Inventory/index', $data);
    }

    public function save_buyInventory(){
        
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data =  array(
            'purchase_inventry' =>  xss_clean($this->request->getVar('purchaseInventory')),  
            'per_inventry_price' =>  xss_clean($this->request->getVar('price')),   
            'total_amount' =>  xss_clean($this->request->getVar('total_amount')),            
            'payment_id' => substr(str_shuffle('1234567890'), 0, 12),
            'created_by' => $user_data['user_id']

        );    
        $return = $this->model->save_buyInventory($data); 
        if($return){
            echo json_encode(['status'=>true,'message'=>'Inventory Purchase Successfully.']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Their is some problem. Please try again.']);
        }

    }

    public function allInventory(){
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data = $this->model->getAll_inventry($user_data['user_id']);
        if($data){
            echo json_encode(['status'=>true,'data'=>$data ]);
        }else{
            echo json_encode(['status'=>false]);
        }
    }
  
 
}
