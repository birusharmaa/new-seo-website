<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Plugin_model;
use App\Models\General_model;

class Plugins extends BaseController
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
        $model = new Plugin_model();
        $this->model = $model; 
        $model1 = new General_model();      
        $this->general = $model1;  
        date_default_timezone_set("Asia/Kolkata");
        login_redirect();         
    }

    public function index()
    {   
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $return['data'] = $this->model->getAll_plugin($user_data['user_id']);
        $return['color'] =  getThemeColor($user_data["user_id"]);        
        $return['title'] = 'All Plugins';  
        return view('Plugins/index',$return);
    }

    public function add_plugin(){   
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data['country'] =  $this->general->allActivecountry($user_data['user_id']);          
        $data['type'] =  $this->general->getallBusiness($user_data['user_id']);  
        $data['color'] =  getThemeColor($user_data["user_id"]);       
        $data['title'] = 'Add Plugins';
        return view('Plugins/add_plugin', $data);
    }

    public function manage_plugins($id)
    {   
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }  
        $data['country'] =  $this->general->allActivecountry($user_data['user_id']); 
        $data['state'] =  $this->general->allActiveState($user_data['user_id']); 
        $data['city'] =  $this->general->allActiveCity($user_data['user_id']); 
        $data['locality'] =  $this->general->allActiveLocality($user_data['user_id']); 
        $data['pincode'] =  $this->general->allActivepincode($user_data['user_id']); 
        $data['plugin_info'] = $this->model->get_plugin($user_data['user_id'], $id);       
        $data['title'] = 'Manage Plugins'; 
        $data['color'] =  getThemeColor($user_data["user_id"]);          
        return view('Plugins/manage_plugins', $data);
    }

    public function save_plugins(){
      
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $this->validation->setRules([
            'first_name'    => 'required',
            'last_name'    => 'required',
            'email'    => 'valid_email',
            'business_name' => 'min_length[5]',
            'business_type' => 'required',
            'address' => 'required',            
            'website_domain' => 'is_unique[seo_plugin.website_domain]'
        ],
        [  
            'first_name' => [
                'required' => 'First Name is required.',
            ],
            'last_name' => [
                'required' => 'Last Name is required.',
            ],
            'email' => [
                'valid_email' => 'Please enter a valid email.',
            ],
            'business_name' => [
                'min_length' => 'Business Name must be at least 5 characters in length.',
            ],
            'business_type' => [
                'required' => 'Please select Business Type.',
            ], 
            'address' => [
                'required' => 'Please enter address.',
            ], 
            'website_domain' => [
                'is_unique' => 'This website domain is already exits.',
            ],

        ]);

        if($this->validation->withRequest($this->request)->run()){

            $permitted_chars = '012349abcDEFghi5678jklmnoPQRStuvWXyz';          
            $password = substr(str_shuffle($permitted_chars), 0, 8);    

            $permitted_numbers = '0123456789';          
            $numbers = substr(str_shuffle($permitted_numbers), 0, 10);
            $key = 'e-PARICHAYA'.$numbers;

            $data = array(
                'first_name'        => xss_clean($this->request->getVar('first_name')),
                'last_name'         => xss_clean($this->request->getVar('last_name')),
                'email'             => xss_clean($this->request->getVar('email')),
                'password'          => $password,
                'phone'             => xss_clean($this->request->getVar('phone')),
                'business_name'     => xss_clean($this->request->getVar('business_name')),
                'business_type'     => xss_clean($this->request->getVar('business_type')),
                'address'           => xss_clean($this->request->getVar('address')),
                'country'           => xss_clean($this->request->getVar('country')),
                'state'             => xss_clean($this->request->getVar('state')),
                'city'              => xss_clean($this->request->getVar('city')),
                'locality'          => xss_clean($this->request->getVar('locality')),
                'pin_code'          => xss_clean($this->request->getVar('pin_code')),
                'plugin_key'        => $key,
                'website_domain'    => $this->request->getVar('website_domain'),
                'created_by'        => $user_data['user_id']
            );  
            $return = $this->model->save_plugin($data);  
            if($return){
                echo json_encode(['status'=>true,'message'=>'Plugin Stored Successfully.']);
            }else{
                echo json_encode(['status'=>false,'message'=>'Their is some problem. Please try again.']);
            }
        }else{
            echo json_encode(['status'=>false, 'validation_error'=> true,'message'=>$this->validation->getErrors()]);          
        }       
    }

    public function plugin_info_update($id){
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data = array(
            'first_name'     => xss_clean($this->request->getVar('first_name')),
            'last_name'     => xss_clean($this->request->getVar('last_name')),
            'email'     => xss_clean($this->request->getVar('email')),
            'phone'     => xss_clean($this->request->getVar('phone')),
            'plugin_logo' => $this->request->getVar('plugin_logo_set'),
            'update_at'    => date("Y-m-d H:i:s"),
            'updated_by'   => $user_data['user_id']
        ); 
        $return = $this->model->plugin_info_update($data, $id);  
        if($return){
            echo json_encode(['status'=>true,'message'=>'General Information Update Successfully.']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Their is some problem. Please try again.']);
        }
       
    }

    public function plugin_pass_update($id){
        
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $password = $this->request->getVar('password');
        $confirmpassword = $this->request->getVar('confirmpassword');
        if( $password == $confirmpassword){
            $data = array(
                'password'     => xss_clean($this->request->getVar('password')),
                'update_at'    => date("Y-m-d H:i:s"),
                'updated_by'   => $user_data['user_id']
            ); 
            $return = $this->model->plugin_pass_update($data, $id);  
            if($return){
                echo json_encode(['status'=>true,'message'=>'Password Update Successfully.']);
            }else{
                echo json_encode(['status'=>false,'message'=>'Their is some problem. Please try again.']);
            }
        }else{
            echo json_encode(['status'=>false,'message'=>'confirm password does not matched. please try again.']);
        }
       
       
    }

    public function pluginInfo_update($id){
      
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data = array(
            'business_name'     => xss_clean($this->request->getVar('business_name')),
            'business_description'     => xss_clean($this->request->getVar('business_description')),
            'address'     => xss_clean($this->request->getVar('address')),
            'country'     => xss_clean($this->request->getVar('country')),
            'state'     => xss_clean($this->request->getVar('state')),
            'city'     => xss_clean($this->request->getVar('city')),
            'locality'     => xss_clean($this->request->getVar('locality')),
            'pin_code'     => xss_clean($this->request->getVar('pin_code')),
            'website_domain'     => xss_clean($this->request->getVar('website_domain')),
            'plugin_appearance'     => xss_clean($this->request->getVar('plugin_appearance')),
            'update_at'    => date("Y-m-d H:i:s"),
            'updated_by'   => $user_data['user_id']
        ); 
        $return = $this->model->pluginInfo_update($data, $id);  
        if($return){
            echo json_encode(['status'=>true,'message'=>'Plugin Information Update Successfully.']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Their is some problem. Please try again.']);
        }
    }

    public function pluginSocial_update($id){
       
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data = array(
            'facebook_link'     => xss_clean($this->request->getVar('facebook_link')),
            'twitter_link'     => xss_clean($this->request->getVar('twitter_link')),
            'google_link'     => xss_clean($this->request->getVar('google_link')),
            'linkedIn_link'     => xss_clean($this->request->getVar('linkedIn_link')),            
            'update_at'    => date("Y-m-d H:i:s"),
            'updated_by'   => $user_data['user_id']
        ); 
        $return = $this->model->pluginInfo_update($data, $id);  
        if($return){
            echo json_encode(['status'=>true,'message'=>'Plugin Social Link Update Successfully.']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Their is some problem. Please try again.']);
        }    
    }

    public function upload_plugin_logo($id)
    {          
        print_r($_FILES['file']);  
        die();

        // $file_name = rand() . $_FILES['plugin_logo']['name'];       
        // $filewithpath = "/assets/img/pluginlogo/" . $file_name;        
        // $file = $this->request->getFile('plugin_logo');
        // $file->move('./assets/img/pluginlogo', $file_name);
        // $return =  $this->model->uploadImage($id,$filewithpath); 
        // if($return){
        //     echo json_encode(['status'=> true, 'path'=>$filewithpath]);
        // }else{
        //     return false;
        // }  
        
    }
    
    public function renewals(){
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }  
        $data['data'] = $this->model->getAll_plugin($user_data['user_id']); 
        $data['color'] =  getThemeColor($user_data["user_id"]);             
        $data['title'] = 'Expire & Renewal Plugins';     
        return view('Renewals/index', $data);
    }
    
 
}
