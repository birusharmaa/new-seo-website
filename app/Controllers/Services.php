<?php

namespace App\Controllers;
use App\Models\Users_model;
use App\Models\ServicesModel;
use App\Libraries\User_details;


class Services extends UiController { 
   
    public function __construct(){
        parent::__construct();
        $this->user_slider = new User_details();
    } 

    public function services_details(){
        $slider = $this->user_slider->getSlider('Service -');
        if(!empty($slider)){
            $slider = $slider[0]['slider_image'];
        }
        

        $slugs = ""; 
        if ($this->request->uri->getTotalSegments() >= 2 && $this->request->uri->getSegment(2)){
            $slugs = $this->request->uri->getSegment(2);
        }
        
        if(!empty($slugs)){
            $this->services = new ServicesModel();
            $service = $this->services->where('slug', $slugs)->first();
            //$this->services->select(['slug', 'service', 'menu_link']);
            $all_services = $this->services->findAll();
            $pageData = [
                'title' => 'Services | '.$slugs,
                'description' => 'This is the Services Detail page',
                'keywords' => 'Healthcare',
                'slug' => $slugs,
                'user_details'  => $this->user,
                'menu_lists'    => $this->final_menu,
                'services'      => $service,
                'all_services'  => $all_services,
                'cart'          => cart_history(),
                'colors'        => $this->colors,
            ];
            return view($this->user['theme_name'].'/'.'frontend/service_detail', $pageData);
        }
        $this->services = new ServicesModel();
        $all_services = $this->services->findAll();

        $pageData = [
            'title' => 'Services details',
            'description' => 'This is the Services Detail page',
            'keywords' => 'Healthcare',
            'slug' => empty($slugs)?"Services Section":$slugs,
            'user_details'  => $this->user,
            'menu_lists'    => $this->final_menu,
            'all_services'  => $all_services,
            'sliders'        => $slider,
            'cart'          => cart_history(),
            'colors'        => $this->colors,
        ];
        return view($this->user['theme_name'].'/'.'frontend/services_details', $pageData);
    }

    public function search(){
        return redirect()->to(base_url());
    }

    /**
     * Services filter function
     *
     * @return void
     */
    public function serviceSearch(){
        $slugs = "";
        if ($this->request->uri->getTotalSegments() >= 2 && $this->request->uri->getSegment(2)){
            $slugs = $this->request->uri->getSegment(2);
        }

        $this->services = new ServicesModel();
        $val = $this->request->getPost("form1");
        $service = $this->services->like('service', $val)->first();

        // $this->services->select(['slug', 'service', 'menu_link']);
        // $all_services = $this->services->findAll();
        if(!empty($service)){
            return redirect()->to(base_url().'/'.'services/'.$service['slug']);
        }
        return redirect()->to(base_url());
    }
}


