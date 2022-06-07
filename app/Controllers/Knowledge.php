<?php

namespace App\Controllers;

class Knowledge extends BaseController
{
    public function __construct()
    {
        $request = \Config\Services::request();
        $session = \Config\Services::session();
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
        $data['color'] =  getThemeColor($user_data["user_id"]);
        $data['title'] = "About e plugin";  
        return view('Knowledge/index', $data);
    }
    public function installation()
    {
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }  
        $data['color'] =  getThemeColor($user_data["user_id"]);      
        $data['title'] = "Account Settings";  
        return view('Knowledge/installation',$data);
    }
    public function uses()
    {
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }  
        $data['color'] =  getThemeColor($user_data["user_id"]);      
        $data['title'] = "Account Settings";  
        return view('Knowledge/uses', $data);
    }
}
