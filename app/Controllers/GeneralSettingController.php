<?php

namespace App\Controllers;
use App\Models\General_model;


class GeneralSettingController extends BaseController
{
    
    function __construct()
    {
        helper("general");
        $request = \Config\Services::request();
        $session = \Config\Services::session();       
        $this->request = $request;
        $this->session = $session;
        $model = new General_model();
        $this->model = $model; 
        helper(['form', 'url']);
        $validation =  \Config\Services::validation();
        $this->validation = $validation; 
        date_default_timezone_set("Asia/Kolkata");
        login_redirect();       
    }
    
    public function businessType(){    
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data['color'] = getThemeColor($user_data["user_id"]);       
        $data['type'] = $this->model->where('user_id', $user_data['user_id'])->orderBy('business_type','ASC')->findAll();  
        $data['title'] = "Business Type";   
        echo view('General/businessType',$data);
    }
       

    public function allBusiness(){
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data = $this->model->where('user_id', $user_data['user_id'])->findAll();  
        if($data){
            echo json_encode(['status'=>true,'data'=> $data ]);
        }
    }

    public function save_business(){  
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data =  array(
            'business_type' =>  xss_clean($this->request->getVar('business_type')),
            'status' => xss_clean($this->request->getVar('status')),
            'user_id' => $user_data['user_id']
        );  
        $return = $this->model->save($data);  
        if($return){
            echo json_encode(['status'=>true,'message'=>'Data Save Successfully.']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Their is some problem. Please try again.']);
        }
    }

    public function edit_business($id){     
        $return = $this->model->find($id);  
        if($return){
            echo json_encode(['status'=>true,'data'=>$return]);
        }else{
            echo json_encode(['status'=>false,'message'=>'No data found']);
        }    
    }

    public function update_business($id){     
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }   
        $data =  array(
            'business_type' =>  xss_clean($this->request->getVar('business_type')),
            'status' => xss_clean($this->request->getVar('status')),
            'user_id' => $user_data['user_id'],
            'update_at' => date("Y-m-d H:i:s")
        );      
        $return = $this->model->update($id, $data);  
        if($return){
            echo json_encode(['status'=>true,'message'=>'Data Update Successfully.']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Their is some problem. Please try again.']);
        }
    }

    public function delete_business($id){
        $return = $this->model->delete($id);  
        if($return){
            echo json_encode(['status'=>true,'message'=>'Data Deleted Successfully.']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Their is some problem. Please try again.']);
        }
    }

    public function country(){
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data['Country'] = $this->model->allcountry($user_data['user_id']);  
        $data['color'] =  getThemeColor($user_data["user_id"]);      
        $data['title'] = "Country";   
        echo view('General/country',$data);
    }

    public function save_country(){
        $this->validation->setRules([
            'country_name' => 'required|is_unique[seo_country.country_name]'            
        ]);
    
        if($this->validation->withRequest($this->request)->run()){
            if($this->session->has('login_user')){
                $user_data = $this->session->get('login_user');
            }
            $data =  array(
                'country_name' =>  xss_clean($this->request->getVar('country_name')),
                'status' => xss_clean($this->request->getVar('status')),
                'created_by' => $user_data['user_id']
            );  
            $return = $this->model->save_country($data);  
            if($return){
                echo json_encode(['status'=>true,'message'=>'Country Save Successfully.']);
            }else{
                echo json_encode(['status'=>false,'message'=>'Their is some problem. Please try again.']);
            }
        }else{
            echo json_encode(['status'=>false, 'validation_error'=> true,'message'=>'Country Name is already exist.']);          
        }  
    }

    public function edit_country($id){
        $return = $this->model->edit_country($id);  
        if($return){
            echo json_encode(['status'=>true,'data'=>$return]);
        }else{
            echo json_encode(['status'=>false,'message'=>'No data found']);
        }    
    }

    public function update_country($id){
        
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data =  array(
            'country_name' =>  xss_clean($this->request->getVar('country_name')),
            'status' => xss_clean($this->request->getVar('status')),
            'update_at' => date("Y-m-d H:i:s"),
            'updated_by' => $user_data['user_id']
        );      
        $return = $this->model->update_country($id, $data);  
        if($return){
            echo json_encode(['status'=>true,'message'=>'Category Update Successfully.']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Their is some problem. Please try again.']);
        }
    }

    public function delete_country($id){
        $return = $this->model->delete_country($id);  
        if($return){
            echo json_encode(['status'=>true,'message'=>'Country Name  Deleted Successfully.']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Their is some problem. Please try again.']);
        }
    }

    public function allcountry(){
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data = $this->model->allcountry($user_data['user_id']); 
        if($data){
            echo json_encode(['status'=>true,'data'=> $data ]);
        }
    }
    
    public function state(){
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data['state'] = $this->model->allState($user_data['user_id']);  
        $data['country']= $this->model->allActivecountry($user_data['user_id']);  
        $data['color'] =  getThemeColor($user_data["user_id"]);             
        $data['title'] = "State";   
        echo view('General/state',$data);
       
    }

    public function allstate(){
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data = $this->model->allstate($user_data['user_id']); 
        if($data){
            echo json_encode(['status'=>true,'data'=> $data ]);
        }
    }

    public function save_state(){
        
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data =  array(
            'state_name' =>  xss_clean($this->request->getVar('state_name')),
            'country_id' =>  xss_clean($this->request->getVar('country_id')),
            'status' => xss_clean($this->request->getVar('status')),
            'created_by' => $user_data['user_id']
        );  
        $return = $this->model->save_state($data);  
        if($return){
            echo json_encode(['status'=>true,'message'=>'State Save Successfully.']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Their is some problem. Please try again.']);
        }
    }

    public function update_state($id){
        
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data =  array(
            'state_name	' =>  xss_clean($this->request->getVar('state_name')),
            'status' => xss_clean($this->request->getVar('status')),
            'country_id' => xss_clean($this->request->getVar('country_id')),
            'updated_at' => date("Y-m-d H:i:s"),
            'updated_by' => $user_data['user_id']
        );   
        
        $return = $this->model->update_state($id, $data);  
        if($return){
            echo json_encode(['status'=>true,'message'=>'State Update Successfully.']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Their is some problem. Please try again.']);
        }
    }

    public function edit_state($id){
        $return = $this->model->edit_state($id);  
        if($return){
            echo json_encode(['status'=>true,'data'=>$return]);
        }else{
            echo json_encode(['status'=>false,'message'=>'No data found']);
        }    
    }

    public function delete_state($id){
        $return = $this->model->delete_state($id);  
        if($return){
            echo json_encode(['status'=>true,'message'=>'State Name deleted Successfully.']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Their is some problem. Please try again.']);
        }
    }

    public function city(){
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data['state'] = $this->model->allActiveState($user_data['user_id']); 
        $data['city'] = $this->model->allcity($user_data['user_id']);    
        $data['color'] =  getThemeColor($user_data["user_id"]);                 
        $data['title'] = "City";   
        echo view('General/city',$data);
    }

    public function allcity(){
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data = $this->model->allcity($user_data['user_id']); 
        if($data){
            echo json_encode(['status'=>true,'data'=> $data ]);
        }
    }

    public function save_city(){
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data =  array(
            'city_name' =>  xss_clean($this->request->getVar('city_name')),
            'state_id' =>  xss_clean($this->request->getVar('state_id')),
            'status' => xss_clean($this->request->getVar('status')),
            'created_by' => $user_data['user_id']
        );  
        $return = $this->model->save_city($data);  
        if($return){
            echo json_encode(['status'=>true,'message'=>'City Save Successfully.']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Their is some problem. Please try again.']);
        }
    }

    public function edit_city($id){
        $return = $this->model->edit_city($id);  
        if($return){
            echo json_encode(['status'=>true,'data'=>$return]);
        }else{
            echo json_encode(['status'=>false,'message'=>'No data found']);
        }  
    }

    public function update_city($id){
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data =  array(
            'city_name	' =>  xss_clean($this->request->getVar('city_name')),
            'status' => xss_clean($this->request->getVar('status')),
            'state_id' => xss_clean($this->request->getVar('state_id')),
            'updated_at' => date("Y-m-d H:i:s"),
            'updated_by' => $user_data['user_id']
        );   
        
        $return = $this->model->update_city($id, $data);  
        if($return){
            echo json_encode(['status'=>true,'message'=>'City Update Successfully.']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Their is some problem. Please try again.']);
        }
    }

    public function delete_city($id){
        $return = $this->model->delete_city($id);  
        if($return){
            echo json_encode(['status'=>true,'message'=>'State Name deleted Successfully.']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Their is some problem. Please try again.']);
        }
    }

    public function locality(){
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data['locality'] = $this->model->alllocality($user_data['user_id']); 
        $data['city'] = $this->model->allActiveCity($user_data['user_id']);  
        $data['color'] =  getThemeColor($user_data["user_id"]);                  
        $data['title'] = "Locality";   
        echo view('General/locality',$data);
    }

    public function save_locality(){
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data =  array(
            'locality_name' =>  xss_clean($this->request->getVar('locality_name')),
            'city_id' =>  xss_clean($this->request->getVar('city_id')),
            'status' => xss_clean($this->request->getVar('status')),
            'created_by' => $user_data['user_id']
        );  
        $return = $this->model->save_locality($data);  
        if($return){
            echo json_encode(['status'=>true,'message'=>'Locality Save Successfully.']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Their is some problem. Please try again.']);
        }
    }

    public function edit_locality($id){
        $return = $this->model->edit_locality($id);  
        if($return){
            echo json_encode(['status'=>true,'data'=>$return]);
        }else{
            echo json_encode(['status'=>false,'message'=>'No data found']);
        }  
    }

    public function update_locality($id){
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data =  array(
            'locality_name	' =>  xss_clean($this->request->getVar('locality_name')),
            'status' => xss_clean($this->request->getVar('status')),
            'city_id' => xss_clean($this->request->getVar('city_id')),
            'updated_at' => date("Y-m-d H:i:s"),
            'updated_by' => $user_data['user_id']
        );   
        
        $return = $this->model->update_locality($id, $data);  
        if($return){
            echo json_encode(['status'=>true,'message'=>'Locality Update Successfully.']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Their is some problem. Please try again.']);
        }
    }

    public function delete_locality($id){
        $return = $this->model->delete_locality($id);  
        if($return){
            echo json_encode(['status'=>true,'message'=>'Locality deleted Successfully.']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Their is some problem. Please try again.']);
        }
    }

    public function alllocality(){
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data = $this->model->alllocality($user_data['user_id']); 
        if($data){
            echo json_encode(['status'=>true,'data'=> $data ]);
        }
    }

    public function pincode(){
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data['pincode'] = $this->model->allpincode($user_data['user_id']);  
        $data['locality'] = $this->model->allActiveLocality($user_data['user_id']);  
        $data['color'] =  getThemeColor($user_data["user_id"]);      
        $data['title'] = "Pincode";   
        echo view('General/pincode',$data);
    }

    public function save_pincode(){
       
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        
        $this->validation->setRules([
            'locality_id' => 'required|is_unique[seo_pincode.locality_id]',
            'pincode' => 'required|is_unique[seo_pincode.pincode]'
        ],
        [  
            'locality_id' => [
                'is_unique' => 'Locality is already exits.',
            ],
            'pincode' => [
                'is_unique' => 'Pincode is already exist.',
            ],
        ]);
    
        if($this->validation->withRequest($this->request)->run()){
            $data =  array(
                'pincode' =>  xss_clean($this->request->getVar('pincode')),
                'locality_id' =>  xss_clean($this->request->getVar('locality_id')),
                'status' => xss_clean($this->request->getVar('status')),
                'created_by' => $user_data['user_id']
            );  
            $return = $this->model->save_pincode($data);  
            if($return){
                echo json_encode(['status'=>true,'message'=>'Pincode Save Successfully.']);
            }else{
                echo json_encode(['status'=>false,'message'=>'Their is some problem. Please try again.']);
            }
        }else{
            echo json_encode(['status'=>false, 'validation_error'=> true,'message'=>$this->validation->getErrors()]);          
        }

    }

    public function edit_pincode($id){
        $return = $this->model->edit_pincode($id);  
        if($return){
            echo json_encode(['status'=>true,'data'=>$return]);
        }else{
            echo json_encode(['status'=>false,'message'=>'No data found']);
        }  
    }

    public function update_pincode($id){
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data =  array(
            'pincode	' =>  xss_clean($this->request->getVar('pincode')),
            'status' => xss_clean($this->request->getVar('status')),
            'locality_id' => xss_clean($this->request->getVar('locality_id')),
            'updated_at' => date("Y-m-d H:i:s"),
            'updated_by' => $user_data['user_id']
        );   
        
        $return = $this->model->update_pincode($id, $data);  
        if($return){
            echo json_encode(['status'=>true,'message'=>'Pincode Update Successfully.']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Their is some problem. Please try again.']);
        }
    }

    public function delete_pincode($id){
        $return = $this->model->delete_pincode($id);  
        if($return){
            echo json_encode(['status'=>true,'message'=>'Pincode deleted Successfully.']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Their is some problem. Please try again.']);
        }
    }

    public function allpincode(){
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data = $this->model->allpincode($user_data['user_id']); 
        if($data){
            echo json_encode(['status'=>true,'data'=> $data ]);
        }
    }

    public function getActiveSateById($id){
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data = $this->model->getActiveSateById($user_data['user_id'], $id); 
        if($data){
            echo json_encode(['status'=>true,'data'=> $data ]);
        }
    }

    public function getActiveCityById($id){
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data = $this->model->getActiveCityById($user_data['user_id'], $id); 
        if($data){
            echo json_encode(['status'=>true,'data'=> $data ]);
        }
    }

    public function getActiveLocalityById($id){
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data = $this->model->getActiveLocalityById($user_data['user_id'], $id); 
        if($data){
            echo json_encode(['status'=>true,'data'=> $data ]);
        }
    }

    public function getActivePincodeById($id){
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }
        $data = $this->model->getActivePincodeById($user_data['user_id'], $id); 
        if($data){
            echo json_encode(['status'=>true,'data'=> $data ]);
        }
    }


    
}
