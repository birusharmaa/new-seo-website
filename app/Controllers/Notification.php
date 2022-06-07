<?php

namespace App\Controllers;

class Notification extends BaseController
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
        $data['title'] = 'Push Notification';
        return view('Notification/index', $data);
    }
}
