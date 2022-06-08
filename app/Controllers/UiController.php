<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Libraries\User_details;

class UiController extends BaseController{
    
    public $user;
    public $final_menu;

    public function __construct(){
        //load helpers
        helper(['url', 'file', 'form', 'language', 'general','plugin', 
            'date_time', 'app_files', 'widget', 'activity_logs', 'currency']);
        $user_details = new User_details();
        $this->user = $user_details->getUserDetails();
        $this->final_menu  = $user_details->menuLists();
        $this->custom_section =  $user_details->getCustomSectionData();
        $this->services =  $user_details->getServicesData();
        $this->products =  $user_details->getAllProductsList();
        //$this->videoes  =  $user_details->getVideoLists();
        $this->posts    =  $user_details->getAllPostLists();
        $this->colors   =  $user_details->getColors();
    }    
}
