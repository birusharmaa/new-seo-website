<?php

namespace App\Controllers;
use App\Models\Enquiry_model;
use App\Libraries\User_details;


class Contact extends UiController { 
    
    protected $validation; 
    protected $enquiry_model; 

    public function __construct(){
        parent::__construct();
        $this->validation    = \Config\Services::validation();
        $this->enquiry_model = new Enquiry_model();
        helper('form');
        $this->user_slider = new User_details();
    }

    public function contact(){
        $slider = $this->user_slider->getSlider('Contact');
        if(!empty($slider)){
            $slider = $slider[0]['slider_image'];
        }

        $pageData = [
            'title' => 'Contact Us',
            'description' => 'This is the contact page',
            'keywords' => 'Contact',
            'user_details'  => $this->user,
            'menu_lists'    => $this->final_menu,
            'sliders'        => $slider,
            'cart'          => cart_history(),
            'colors'        => $this->colors,
        ];
        return view($this->user['theme_name']."/".'frontend/contact', $pageData);
    }


    //Save inquiry modal data
    public function saveInquiry(){
        $this->validation->setRules([
            'name'   => ["label" => "name", 'rules' => 'required'],
            'number' => ["label" => 'number', 'rules' => 'required|min_length[10]|max_length[10]'],
            'message'=> ["label" => 'message', 'rules' => 'required'],
        ]);

        if($this->validation->withRequest($this->request)->run()){
            $data = [
                "name"    => $this->request->getPost("name"),
                "phone"   => $this->request->getPost("number"),
                "email"   => $this->request->getPost("email"),
                'source'  => 'e-plugin',
                'status'  => "1",
                "message" => $this->request->getPost("message"),
            ];

            $res = $this->enquiry_model->save($data);
            if($res){
                $message = [
                    'status' => true,
                    'msg'    => "Message sent successfully, we will contact your soon!",
                ];
                echo json_encode($message);
                exit; 
            }

        }else{
            $errors = [
                'status' => false,
                'msg'    => $this->validation->getErrors(),
            ];
            echo json_encode($errors);
            exit; 
        }

        
    }

    //Save inquiry modal data
    public function inquiry(){
        
        $this->validation->setRules([
            'name'   => ["label" => "name", 'rules' => 'required'],
            'email'   => ["label" => "email", 'rules' => 'required|valid_email'],
            'number' => ["label" => 'number', 'rules' => 'required|min_length[10]|max_length[10]'],
            'message'=> ["label" => 'message', 'rules' => 'required'],
        ]);

        if($this->validation->withRequest($this->request)->run()){
            
            $data = [
                "name"    => $this->request->getPost("name"),
                "email"    => $this->request->getPost("email"),
                "phone"   => $this->request->getPost("number"),
                'source'  => 'e-plugin',
                'status'  => "1",
                "message" => $this->request->getPost("message"),
            ];

            $res = $this->enquiry_model->save($data);
            if($res){
                $message = [
                    'status' => true,
                    'msg'    => "Message sent successfully, we will contact your soon!",
                ];
                echo json_encode($message);
                exit; 
            }

        }else{
            $errors = [
                'status' => false,
                'msg'    => $this->validation->getErrors(),
            ];
            echo json_encode($errors);
            exit; 
        }
    }

    public function search(){
        
        return redirect()->to(base_url());
    }


}


