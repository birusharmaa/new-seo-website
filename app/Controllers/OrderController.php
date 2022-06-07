<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Order_model;


class OrderController extends BaseController
{   
    protected $manage;

    public function __construct()
    {
  
        $request = \Config\Services::request();
        $session = \Config\Services::session();      
        $validation =  \Config\Services::validation();
        $this->session = $session;
        $this->request = $request;        
        
        helper("general");       
        login_redirect();
    }

    public function index()
    {          
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }        
        $model =  new Order_model();
        $data['color'] =  getThemeColor($user_data["user_id"]);       
        $data['title'] = "Orders";  
        return view('inbox/order',$data);
    }
  

}
