<?php

namespace App\Controllers;
use App\Models\ProductsModel;
use App\Libraries\User_details;
use App\Models\CartHistoryModel;



class Products extends UiController { 
    public function __construct(){
        parent::__construct();
        $this->user_slider = new User_details();
        $this->cart_history = new CartHistoryModel();

    } 
    
    
    public function product_details(){
        $slug = $this->request->uri->getSegment(2);
        $slider = $this->user_slider->getSlider('Products -');
        if(!empty($slider)){
            $slider = $slider[0]['slider_image'];
        }

        
        
        if(!empty($slug)){
            $this->product = new ProductsModel();
            $product = $this->product->where('menu_link', $slug)->first();
            
            $all_products = $this->product->findAll();
            $pageData = [
                'title' => 'Product | '.$slug,
                'description' => 'This is the Product Detail page',
                'keywords' => 'Healthcare',
                'slugs' => empty($slug)?"Products Section":$slug,
                'user_details'  => $this->user,
                'menu_lists'    => $this->final_menu,
                'product'       => $product,
                'all_products'  => $all_products,
                'cart'          => cart_history(),
                'colors'        => $this->colors,
            ];
            return view($this->user['theme_name'].'/'.'frontend/product_detail', $pageData);
        }
        $this->product = new ProductsModel();
        $all_products = $this->product->findAll();
        $pageData = [
            'title' => 'Product details',
            'description' => 'This is the Product Detail page',
            'keywords' => 'Healthcare',
            'slugs' => empty($slug)?"Products Section":$slug,
            'user_details'  => $this->user,
            'menu_lists'    => $this->final_menu,
            'all_products'  => $all_products,
            'sliders'        => $slider,
            'cart'          => cart_history(),
            'colors'        => $this->colors,
        ];
        return view($this->user['theme_name'].'/'.'frontend/product_details', $pageData);
    }

    public function search(){
        return redirect()->to(base_url());
    }
}


