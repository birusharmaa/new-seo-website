<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users_model;
use App\Models\Enquiry_model;

class SettingsController extends BaseController
{

    protected $model;
    protected $users;
    protected $enquiry;
    protected $session;

    public function __construct()
    {

        $this->session = \Config\Services::session();
        $this->enquiry = new Enquiry_model();
        $this->users = new Users_model();
        helper("general");
        login_redirect();
    }

    public function index()
    {
        if ($this->session->has('login_user')) {
            $user_data = $this->session->get('login_user');
        }
        $userinfo =  $this->users->getUserInfoId($user_data['user_id']);
        $data['userInfo'] =  $userinfo;
        $data['color'] =  getThemeColor($user_data["user_id"]);
        $data['title'] = "Account Settings";
        return view('dashboard/settings', $data);
    }

    public function profile(){
        if ($this->session->has('login_user')) {
            $user_data = $this->session->get('login_user');
        }
        $userinfo =  $this->users->getUserInfoId($user_data['user_id']);
        $data['color'] =  getThemeColor($user_data["user_id"]);
        $data['userInfo'] =  $userinfo;
        $data['title'] = "Profile";
        return view('dashboard/profile', $data);
    }

    public function dashboard(){
        if ($this->session->has('login_user')) {
            $user_data = $this->session->get('login_user');
        }
        $userinfo =  $this->users->getUserInfoId($user_data['user_id']);
        $data['enquiry']  = $this->enquiry->get_TopEnquiry();
        $data['count']  = $this->enquiry->get_totalCount();
        $data['userInfo'] =  $userinfo;
        $data['color'] =  getThemeColor($user_data["user_id"]);
        $data['title'] = "Dashboard";
        return view('dashboard/index', $data);
    }

    public function save_general($id)
    {

        $data =  array(
            'user_name' =>  xss_clean($this->request->getVar('user_name')),
            'user_email' =>  xss_clean($this->request->getVar('user_email')),
            'user_phone' =>  xss_clean($this->request->getVar('user_phone'))
        );
        $return = $this->users->UpdateUser($id, $data);
        if ($return) {
            echo json_encode(['status' => true, 'message' => 'General Information Updated Successfully.']);
        } else {
            echo json_encode(['status' => false, 'message' => 'Their is some problem. Please try again.']);
        }
    }

    function reset_password($id)
    {
        $password = $_POST['password'];
        $user_data = array("user_password" => base64_encode($password));
        $return = $this->users->UpdateUser($id, $user_data);
        if ($return) {
            echo json_encode(['status' => true, 'message' => 'Password Changed Successfully.']);
        } else {
            echo json_encode(['status' => false, 'message' => 'Their is some problem. Please try again.']);
        }
    }

    function compony_Info($id)
    {
        $data =  array(
            'company_name' =>  xss_clean($this->request->getVar('company_name')),
            'company_profile' =>  xss_clean($this->request->getVar('company_profile')),
            'company_address' =>  xss_clean($this->request->getVar('company_address')),
            'company_phone_no' =>  xss_clean($this->request->getVar('company_phone_no')),
            'website_URL' =>   xss_clean($this->request->getVar('website_URL'))
        );
        $return = $this->users->UpdateUser($id, $data);
        if ($return) {
            echo json_encode(['status' => true, 'message' => 'Company Info Updated Successfully.']);
        } else {
            echo json_encode(['status' => false, 'message' => 'Their is some problem. Please try again.']);
        }
    }

    function social_link($id)
    {
        $data =  array(
            'facebook_link' => xss_clean($this->request->getVar('facebook_link')),
            'twitter_link' => xss_clean($this->request->getVar('twitter_link')),
            'google_plus' => xss_clean($this->request->getVar('google_plus')),
            'linkedIn' =>  xss_clean($this->request->getVar('linkedIn'))
        );
        $return = $this->users->UpdateUser($id, $data);
        if ($return) {
            echo json_encode(['status' => true, 'message' => 'Social Links Updated Successfully.']);
        } else {
            echo json_encode(['status' => false, 'message' => 'Their is some problem. Please try again.']);
        }
    }

    function save_personalinfo($id)
    {

        $data =  array(
            'user_name' =>  xss_clean($this->request->getVar('user_name')),
            'user_email' =>  xss_clean($this->request->getVar('user_email')),
            'user_phone' =>  xss_clean($this->request->getVar('user_phone'))
        );

        $return = $this->users->UpdateUser($id, $data);
        if ($return) {
            echo json_encode(['status' => true, 'message' => 'Personal Informaltion Updated Successfully.']);
        } else {
            echo json_encode(['status' => false, 'message' => 'Their is some problem. Please try again.']);
        }
    }

    function update_theme($color)
    {

        if ($this->session->has('login_user')) {
            $user_data = $this->session->get('login_user');
        }
        $return = $this->users->update_theme($user_data['user_id'], $color);
        if ($return) {
            echo json_encode(['status' => true, 'message' => 'Theme Color updated Successfully']);
        } else {
            echo json_encode(['status' => false, 'message' => 'Their is some problem. Please try again.']);
        }
    }

    function other_business_info($id){
        $business_logo = NULL; 
        $file = $this->request->getFile('business_logo');
        if(!empty($_FILES['business_logo']['name'])){
            $business_logo = $file->getRandomName();
            $file->move(env('SEO_SUBPATH').'uploads/img/business_logo/', $business_logo);
        }
        
        $business_icon = NULL; 
        $file = $this->request->getFile('business_icon');
        if(!empty($_FILES['business_icon']['name'])){
            $business_icon = $file->getRandomName();
            $file->move(env('SEO_SUBPATH').'uploads/img/business_icon/', $business_icon);
        }

        $data =  array(
            'business_name' =>  xss_clean($this->request->getVar('business_name')),
            'domain_url' =>  xss_clean($this->request->getVar('domain_url')),
            'font_size' =>  xss_clean($this->request->getVar('font_size')),
            'business_description' =>  xss_clean($this->request->getVar('business_description')),
            'business_logo' =>  $business_logo,
            'business_icon' =>  $business_icon,
        );
        $data = array_filter($data);
        $return = $this->users->other_business_info($id, $data);
        if ($return) {
            echo json_encode(['status' => true, 'message' => 'Business Information Updated Successfully.']);
        } else {
            echo json_encode(['status' => false, 'message' => 'Their is some problem. Please try again.']);
        }
    }

    function other_contact($id)
    {

        $data =  array(
            'business_address' =>  xss_clean($this->request->getVar('business_address')),
            'alternate_address' =>  xss_clean($this->request->getVar('alternate_address')),
            'email_id' =>  xss_clean($this->request->getVar('email_id')),
            'alternate_email_id' =>  xss_clean($this->request->getVar('alternate_email_id')),
            'mobile' =>  xss_clean($this->request->getVar('mobile')),
            'alternate_mobile' =>  xss_clean($this->request->getVar('alternate_mobile')),
            'opening_hours' =>  xss_clean($this->request->getVar('opening_hours')),
            'facebook_page' =>  xss_clean($this->request->getVar('facebook_page')),
            'youtube_page' =>  xss_clean($this->request->getVar('youtube_page')),
            'linkedin_page' =>  xss_clean($this->request->getVar('linkedin_page')),
            'twitter_page' =>  xss_clean($this->request->getVar('twitter_page')),
            'instagram_page' =>  xss_clean($this->request->getVar('instagram_page'))
        );
        $return = $this->users->other_contact($id, $data);
        if ($return) {
            echo json_encode(['status' => true, 'message' => 'Contact Information Updated Successfully.']);
        } else {
            echo json_encode(['status' => false, 'message' => 'Their is some problem. Please try again.']);
        }
    }

    function other_currency($id)
    {
        $data =  array(
            'currency' =>  xss_clean($this->request->getVar('currency'))
        );
        $return = $this->users->other_currency($id, $data);
        if ($return) {
            echo json_encode(['status' => true, 'message' => 'Contact Information Updated Successfully.']);
        } else {
            echo json_encode(['status' => false, 'message' => 'Their is some problem. Please try again.']);
        }
    }

    function theme_color_form($id)
    {
        $data =  array(
            'theme_name' =>  xss_clean($this->request->getVar('theme_name')),
            'theme_color' =>  xss_clean($this->request->getVar('theme_color'))
        );
        
        $return = $this->users->theme_color_form($id, $data);
        if ($return) {
            echo json_encode(['status' => true, 'message' => 'Theme color saved successfully.']);
        } else {
            echo json_encode(['status' => false, 'message' => 'Their is some problem. Please try again.']);
        }
    }

    function razorpay_settings($id)
    {
        $data =  array(
            'key' =>  xss_clean($this->request->getVar('key')),
            'secret' =>  xss_clean($this->request->getVar('secret'))
        );
        $return = $this->users->razorpay_settings($id, $data);
        if ($return) {
            echo json_encode(['status' => true, 'message' => 'Razorpay Settings Saved Successfully.']);
        } else {
            echo json_encode(['status' => false, 'message' => 'Their is some problem. Please try again.']);
        }
    }

    public function updateSiteLogo($id)
    {
        $file_name = rand() . $_FILES['company_logo']['name'];
        $filewithpath = "/assets/img/logo/" . $file_name;
        $file = $this->request->getFile('company_logo');
        $file->move('./assets/img/logo', $file_name);
        $return = $this->users->uploadImage($id, $filewithpath);
        if ($return) {
            echo json_encode(['status' => true, 'path' => $filewithpath]);
        } else {
            return false;
        }
    }

    function upload_business_logo($id = null)
    {

        $file_name = rand() . $_FILES['business_logo']['name'];
        $filewithpath = "/assets/img/business_logo/" . $file_name;
        $file = $this->request->getFile('business_logo');
        $file->move('./assets/img/business_logo', $file_name);
        $return = $this->users->upload_business_logo($id, $filewithpath);
        if ($return) {
            echo json_encode(['status' => true, 'path' => $filewithpath]);
        } else {
            return false;
        }
    }

    function upload_business_icon($id = null)
    {
        $file_name = rand() . $_FILES['business_icon']['name'];
        $filewithpath = "/assets/img/business_icon/" . $file_name;
        $file = $this->request->getFile('business_icon');
        $file->move('./assets/img/business_icon', $file_name);
        $return = $this->users->upload_business_icon($id, $filewithpath);
        if ($return) {
            echo json_encode(['status' => true, 'path' => $filewithpath]);
        } else {
            return false;
        }
    }
}
