<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Appearance_model;
use App\Models\Manage_model;

class Appearance extends BaseController
{

    public function __construct()
    {
        $request = \Config\Services::request();
        $session = \Config\Services::session();
        $this->session = $session;
        $this->request = $request;
        $model = new Appearance_model();
        $this->appearance = $model;
        helper("general");
        login_redirect();
    }

    public function index()
    {          
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }       
        $userinfo =  $this->users->getUserInfoId($user_data['user_id']);
        $data['userInfo'] =  $userinfo;   
        $data['color'] =  getThemeColor($user_data["user_id"]);       
        $data['title'] = "Account Settings";  
        return view('Dashboard/settings',$data);
    }

    public function header_footer()
    {      
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }  
        $data['info'] = $this->appearance->get_header_footer($user_data["user_id"]); 
        $data['color'] =  getThemeColor($user_data["user_id"]);  
        $data['title'] = "Header And Footer";
        return view('appearance/header_footer',$data);
    }

    function header_footer_save(){

        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }          
        $data =  array(
            'header_background' =>  xss_clean($this->request->getVar('header_background')),
            'header_text' =>  xss_clean($this->request->getVar('header_text')),
            'navbar_background' =>  xss_clean($this->request->getVar('navbar_background')),
            'navbar_text' =>  xss_clean($this->request->getVar('navbar_text')),
            'searchbar_color' =>   xss_clean($this->request->getVar('searchbar_color')),
            'footer_background' =>   xss_clean($this->request->getVar('footer_background')),
            'footer_text_color' =>   xss_clean($this->request->getVar('footer_text_color')),
            'footer_text' =>   xss_clean($this->request->getVar('footer_text')),
            'copyright_background' =>   xss_clean($this->request->getVar('copyright_background')),
            'copyright_text_color' =>   xss_clean($this->request->getVar('copyright_text_color')),
            'copyright_text' =>   xss_clean($this->request->getVar('copyright_text')),
            'sitemap' =>   xss_clean($this->request->getVar('sitemap')),
            'created_by' => $user_data["user_id"]

        );    
        $return = $this->appearance->header_footer_save($data); 
        if($return){
            echo json_encode(['status'=>true,'message'=>'Header and Footer Save Successfully.']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Their is some problem. Please try again.']);
        }
    }

    function header_footer_update($id){

        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }          
        $data =  array(
            'header_background' =>  xss_clean($this->request->getVar('header_background')),
            'header_text' =>  xss_clean($this->request->getVar('header_text')),
            'navbar_background' =>  xss_clean($this->request->getVar('navbar_background')),
            'navbar_text' =>  xss_clean($this->request->getVar('navbar_text')),
            'searchbar_color' =>   xss_clean($this->request->getVar('searchbar_color')),
            'footer_background' =>   xss_clean($this->request->getVar('footer_background')),
            'footer_text_color' =>   xss_clean($this->request->getVar('footer_text_color')),
            'footer_text' =>   xss_clean($this->request->getVar('footer_text')),
            'copyright_background' =>   xss_clean($this->request->getVar('copyright_background')),
            'copyright_text_color' =>   xss_clean($this->request->getVar('copyright_text_color')),
            'copyright_text' =>   xss_clean($this->request->getVar('copyright_text')),
            'sitemap' =>   xss_clean($this->request->getVar('sitemap')),
            'updated_by' => $user_data["user_id"],
            'updated_at' => date("Y-m-d H:i:s")
        );    
        $return = $this->appearance->header_footer_update($id, $data); 
        if($return){
            echo json_encode(['status'=>true,'message'=>'Header and footer updated successfully.']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Their is some problem. Please try again.']);
        }
    }

    function call_action(){
           
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }  
        //$data['info'] = $this->appearance->get_header_footer($user_data["user_id"]); 
        $data['color'] =  getThemeColor($user_data["user_id"]);  
        $data['title'] = "Call Action";
        return view('appearance/call_action',$data);
    }

    function arrange_section(){
           
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }  
        $model =  new Manage_model();    
        $data['pages'] =  $model->get_all_pages($user_data["user_id"]); 
        $data['color'] =  getThemeColor($user_data["user_id"]);  
        $data['title'] = "Arrange Section";
        return view('appearance/arrange_section',$data);
    }
 
    function save_arrange_sorting(){

        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }   
        $model =  new Appearance_model();  
        $order = $_POST['sorting_order'];
        $count = 0;
        $num=1;
        if($order){            
            foreach( $order as $value){                  
                $arr = explode(',',$value); 
                $result = $model->get_sorting_order($arr[0],$arr[1],$arr[2],$arr[4],$user_data["user_id"]);

                if($result!=''){
                   
                    $collection_update = array(
                        'menu_id' => $arr[0],
                        'submenu_id' => $arr[1],
                        'section_id' => $arr[2],
                        'soroting_order' => $num, 
                        'section_title' => $arr[4],
                        'title' => $arr[5],
                        'updated_by' => $user_data["user_id"],
                        'updated_at' => date("Y-m-d H:i:s")
                    ); 
                    $res = $model->update_arrange_sorting($collection_update, $result);  
                    if($res){
                        $count++;
                    } 
                    $num++;
                }else{
                    $collection_insert = array(
                        'menu_id' => $arr[0],
                        'submenu_id' => $arr[1],
                        'section_id' => $arr[2],
                        'soroting_order' => $num, 
                        'section_title' => $arr[4],
                        'title' => $arr[5],
                        'created_by' => $user_data["user_id"]
                     ); 
                     $res = $model->save_arrange_sorting($collection_insert);  
                     if($res){
                        $count++;
                     }  
                     $num++;
                }   
            }
        }
              
        if($count>0){
            echo json_encode(['status'=>true,'message'=>'Sorting order update Successfully.']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Their is some problem. Please try again.']);
        }
    }


  

}
