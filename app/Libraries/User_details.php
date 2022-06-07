<?php

namespace App\Libraries;

use App\Models\Users_model;
use App\Models\MenuModel;
use App\Models\SliderSectionModel;
use App\Models\SliderModel;
use App\Models\CustomSectionModel;
use App\Models\ServicesModel;
use App\Models\ProductsModel;
use App\Models\VideoModel;
use App\Models\PostsModel;
use App\Models\Appearance_model;



class User_details{

    /**
     * Making menu list
     *
     * @return void
     */
    public function menuLists(){
        
        //Get all menu list  
        $this->menu = new MenuModel();
        $this->menu->select(['id', 'menu_name','menu_link']);
        $this->menu->where(['sub_menu' => '0', 'footer_menu' => '0']);
        $this->menu->orderBy('sorting_order', 'asc');
        $menus =  $this->menu->findAll();

        //Make final menu array for view page
        $final_menu = [];
        foreach($menus as $menu){
            $sub = [];
            if($menu['menu_name']=="Services"){
                $this->services = new ServicesModel();
                $this->services->select(['menu_link', 'service']);
                $services = $this->services->where('menu_id',$menu['id'])->findAll();
                if(!empty($services)){
                    foreach($services as $service){
                        $sub[] = ['menu_name'=>$service['service'], "menu_link"=> 'services/'.$service['menu_link']];
                    }
                }
                $menu['sub_menu'] = $sub;
                $final_menu[] = $menu;

            }else if($menu['menu_name']=="Products"){
                $this->product = new ProductsModel();
                $this->product->select(['product_name','menu_link']);
                $product = $this->product->where('menu_id',$menu['id'])->findAll();
                if(!empty($product)){
                    foreach($product as $prod){
                        $sub[] = ['menu_name'=>$prod['product_name'], "menu_link"=> 'products/'.$prod['menu_link']];
                    }
                }
                $menu['sub_menu'] = $sub;
                $final_menu[] = $menu;
            }else if($menu['menu_name']=="Updates"){
                $user = $this->getUserDetails();
               
                $this->post = new PostsModel();
                $this->post->select(['title','slug']);
                $posts = $this->post
                        ->where(['created_by' => $user['id'], 'status' => 'published'])
                        ->orderBy('id','desc')
                        ->findAll(5);
                
                if(!empty($posts)){
                    foreach($posts as $post){
                        $sub[] = ['menu_name'=>$post['title'], "menu_link"=> 'updates/'.$post['slug']];
                    }
                }
                $menu['sub_menu'] = $sub;
                $final_menu[] = $menu;
            }else{
                $menu['sub_menu'] = $sub;
                $final_menu[] = $menu;
            }   
        }
        $menu = $this->getPagesSlider($final_menu);
       
        return $menu;
    }


    /**
     * Get user all infomation
     *
     * @return void
     */
    public function getUserDetails(){
        $this->user = new Users_model();
        $user  = $this->user->getUserDetails();
        return $user;
    } 

    /**
     * Get page slider
     *
     * @param [type] $data
     * @return void
     */
    public function getPagesSlider($data){
        $this->slider_model  = new SliderSectionModel();
        $this->slider_images = new SliderModel();
        
        $this->slider_model->select(['page_id', 'slider']);
        $slider_details = $this->slider_model->findAll();
        $slider_page = json_decode($slider_details[0]['page_id']);
        // echo "<pre>";
        // print_r($slider_page);
        $slider = $slider_details[0]['slider'];
        
        $slider = str_replace('"',"", $slider);
        $slider = str_replace('[',"", $slider);
        $slider = str_replace(']',"", $slider);
        $slider = str_replace("" ,"", $slider);
        $slider = explode(",", $slider);
        $slider_image_list = [];
        foreach($slider as $v){
            $this->slider_images->select(['slider_image', 'title', 'description', 'text_color', 'heading_color']);
            $image = $this->slider_images->find($v);
            
            $img   = $image['slider_image'];
            $title = $image['title'];
            $desc  = $image['description'];
            $text  = $image['text_color'];
            $head  = $image['heading_color'];
            
            $arr = [ "image"=>$img, "title"=>$title, "desc"=>$desc, "text_color"=>$text, 'heading_color'=>$head] ;
            
            $slider_image_list[] = $arr;
        }
        
        $slider_page = json_decode(json_encode($slider_page), true);
        $final_slider = [];
        foreach($slider_page as $sp){
           $sp['slider_image'] = $slider_image_list;
           $final_slider[] = $sp;
        }
        $final_menu = [];
        // echo "<pre>";
        // print_r($data);
        
        $final_menu_slider = [];
        foreach($data as $key=>$d){
            $final_s_img = $this->setSliderInMenu($slider_page, $d['id'], $final_slider);
            $d['slider_images'] = (is_array($final_s_img) && !empty($final_s_img))?$final_s_img:[];
            $final_menu_slider[] = $d;
        }
    
        return $final_menu_slider;
    }

    /**
     * Make submenu list
     *
     * @param array $slider_page
     * @param integer $menu_id
     * @param array $slider_images
     * @return void
     */
    private function setSliderInMenu($slider_page = [], $menu_id = 0, $slider_images = []){
        foreach($slider_page as $k=>$sp){
            if($sp['menu']===$menu_id){
                return $slider_images[$k]['slider_image'];
            }
        }
    }
    
    /**
     * Fetch data from custom section 
     *
     * @return void
     */
    public function getCustomSectionData(){
        $this->custom_section = new CustomSectionModel();
        $custom = $this->custom_section->findAll();
        if(count($custom)>0){
            $slider_page = json_decode($custom[0]['page_id']);
            $data = [
                "home" => true,
                "data" => $custom
            ];
        }else{
            $data = [
                "home" => true,
                "data" => []
            ];
        }
        return $data;
    }

    /**
     * Get services data and all details
     *
     * @return void
     */
    public function getServicesData(){
        $this->services = new ServicesModel();
        $services = $this->services->where('status', '1')->findAll();  
        return $services;
    }

    /**
     * Get all product list and return 
     *
     * @return void
     */
    public function getAllProductsList(){
        $this->product = new ProductsModel();
        $all_products = $this->product->findAll();
        return $all_products;
    }
    
    /**
     * Get Video lists
     *
     * @return void
     */
    public function getVideoLists(){
        $this->video = new VideoModel();
        $all_videoes = $this->video->findAll();
        return $all_videoes;
    }

    public function getAllPostLists(){
        $this->posts = new PostsModel();
        $all_posts = $this->posts->findAll();
        return $all_posts;
    }

    /**
     * get Page sider for single page;
     *
     * @param [type] $data
     * @return void
     */
    public function getSlider($data = null){
        $this->slider_model  = new SliderSectionModel();
        $this->slider_images = new SliderModel();
        
        $this->slider_model->select(['page_id', 'slider']);
        $slider_details = $this->slider_model->findAll();
        $slider_page = json_decode($slider_details[0]['page_id']);
        
        
        $slider = $slider_details[0]['slider'];
        $slider = str_replace('"',"", $slider);
        $slider = str_replace('[',"", $slider);
        $slider = str_replace(']',"", $slider);
        $slider = str_replace("" ,"", $slider);
        $slider = explode(",", $slider);
        $slider_image_list = [];
        foreach($slider as $v){
            $this->slider_images->select(['slider_image', 'title', 'description', 'text_color', 'heading_color']);
            $image = $this->slider_images->find($v);
            $img   = $image['slider_image'];
            $title = $image['title'];
            $desc  = $image['description'];
            $text  = $image['text_color'];
            $head  = $image['heading_color'];            
            $arr = [ "image"=>$img, "title"=>$title, "desc"=>$desc, "text_color"=>$text, 'heading_color'=>$head] ;
            $slider_image_list[] = $arr;
        }
        
        $slider_page = json_decode(json_encode($slider_page), true);
        $final_slider = [];
        foreach($slider_page as $sp){
            if($sp['sub_menu_title'] == $data){
                $sp['slider_image'] = $slider_image_list;
                $final_slider[] = $sp;
            }
        }
        return $final_slider;
        
    }

    public function getColors(){
        $appearance =new Appearance_model();
        return $appearance->findAllData();
    }

    

}
