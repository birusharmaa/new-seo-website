<?php

namespace App\Controllers;
use App\Models\Enquiry_model;

class Inbox extends BaseController
{

    public function __construct()
    {
        $request = \Config\Services::request();
        $session = \Config\Services::session();
        $this->session = $session;
        $this->request = $request;
        $model = new Enquiry_model();
        $this->model = $model;
        helper("general");
        login_redirect();
    }
    
    public function index()
    {   
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data['data'] = $this->model->get_allEnquiry();
        $data['color'] =  getThemeColor($user_data["user_id"]);      
        $data['title'] = 'Inbox';
        return view('inbox/index', $data);
    }
}