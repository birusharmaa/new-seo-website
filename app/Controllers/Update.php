<?php

namespace App\Controllers;
use App\Libraries\User_details;
use App\Models\PostsModel;

class Update extends UiController { 
    public function __construct(){
        parent::__construct();
        $this->user_slider = new User_details();
    } 
  
    public function update_details(){   
        $update = $this->request->uri->getSegment(2);
        $slider = $this->user_slider->getSlider('Updates');
        if(!empty($slider)){
            $slider = $slider[0]['slider_image'];
        }

        /**
         * Make gallery images array
         */
        $images = $this->user_slider->galleryImages('Updates');
        
         /**
         * Make video gallery array
         */
        $video =  $this->user_slider->getVideoLists('Updates');
        
        if(!empty($update)){
            $this->post = new PostsModel();
            $post = $this->post->where('slug', $update)->first();
            $all_posts = $this->post->findAll();
            $pageData = [
                'title' => 'Updates | '.$update,
                'description' => 'This is the Product Detail page',
                'keywords' => 'Healthcare',
                'slugs' => empty($update)?"Products Section":$update,
                'user_details'  => $this->user,
                'menu_lists'    => $this->final_menu,
                'post'          => $post,
                'all_post'      => $all_posts,
                'cart'          => cart_history(),
                'colors'        => $this->colors,
                'videoes'       => $video,
                'gallery_images'=> $images,
            ];
            return view($this->user['theme_name'].'/'.'frontend/update_detail', $pageData);
        }

        $this->post = new PostsModel();
        $all_posts = $this->post->findAll();
        $pageData = [
            'title' => 'Update details',
            'description' => 'This is the Update Detail page',
            'keywords' => 'Healthcare',
            'sliders'        => $slider,
            'update' => !empty($update)?$update:"Update section",
            'user_details'  => $this->user,
            'menu_lists'    => $this->final_menu,
            'all_post'      => $all_posts,
            'cart'          => cart_history(),
            'colors'        => $this->colors,
            'videoes'       => $video,
            'gallery_images'=> $images,
        ];
        return view($this->user['theme_name'].'/'.'frontend/update_details', $pageData);
    }

    public function search(){
        return redirect()->to(base_url());
    }
}


