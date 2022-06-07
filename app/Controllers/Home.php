<?php

namespace App\Controllers;
use App\Models\MenuModel;
use App\Libraries\User_details;
use App\Models\CartHistoryModel;

class Home extends UiController { 
    protected $slider_model;
    protected $slider_images;
    protected $cart_history;

    public function __construct(){
        parent::__construct();
        $this->user_slider = new User_details();
        $this->cart_history = new CartHistoryModel();
    } 

    public function index(){
        
        $this->session      = session();
        $count = 0;
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
            if(isset($user_data['login_type']) && $user_data['login_type'] == 'Customer'){
                $user_id = $user_data['login_id'];
            }
        }
        $slider = $this->user_slider->getSlider('Home');
        if(!empty($slider)){
            $slider = $slider[0]['slider_image'];
        }
        
        $pageData = [
            'title'         => 'Home',
            'description'   => 'This is the index page',
            'keywords'      => 'Healthcare',
            'sliders'        => $slider,
            'user_details'  => $this->user,
            'menu_lists'    => $this->final_menu,
            'custom_section'=> $this->custom_section,
            'services'      => $this->services,
            'products'      => $this->products,
            'videoes'       => $this->videoes,
            'posts'         => $this->posts,
            'colors'        => $this->colors,
            'cart'          => cart_history(),
        ];
        return view($this->user['theme_name'].'/'.'frontend/index', $pageData);
    }

    public function searchLink(){
        $menu_model = new MenuModel();
        $search = $this->request->getVar("search");

        $menu_model->select('menu_link');
        $menu_model->like('menu_name', $search);
        $url = $menu_model->findAll(1);
        // echo $url[0]['menu_link'];
        // exit;
        if(count($url)>0){
            return redirect()->to($url[0]['menu_link']); 
        }
        return redirect()->to(base_url()); 
    }
}


