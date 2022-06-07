<?php

namespace App\Controllers;
use App\Libraries\User_details;

class About extends UiController { 
    
    public function __construct(){
        parent::__construct();
        $this->user_slider = new User_details();
    } 

    public function about(){
        $slider = $this->user_slider->getSlider('About Us');
        if(!empty($slider)){
            $slider = $slider[0]['slider_image'];
        }
        $pageData = [
            'title' => 'About Us',
            'description' => 'This is the about page',
            'keywords' => 'Healthcare',
            'sliders'        => $slider,
            'user_details'  => $this->user,
            'menu_lists'    => $this->final_menu,
            'colors'        => $this->colors,
            'cart'          => cart_history(),
        ];
        return view($this->user['theme_name'].'/'.'frontend/about', $pageData);
    }

    public function search(){
        
        return redirect()->to(base_url());
    }

    
}


