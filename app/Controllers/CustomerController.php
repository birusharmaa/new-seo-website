<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CustomerModel;
use App\Models\CustomerAddressModel;
use App\Models\CartHistoryModel;
use App\Models\ProductsModel;
use App\Models\ProductOrders;


class CustomerController extends UiController
{   
    protected $customer     = "";
    protected $customer_add = "";
    protected $session      = "";
    protected  $validation  = "";
    public function __construct(){
        parent::__construct();
        $this->customer     = new CustomerModel();
        $this->customer_add = new CustomerAddressModel();
        $this->cart_history = new CartHistoryModel();
        $this->session      = session();
        $this->validation =  \Config\Services::validation();
    }

    public function index(){
        $count = 0;
        $customers = "";
        $orders = [];
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
            if(isset($user_data['login_type']) && $user_data['login_type'] == 'Customer'){
                $user_id = $user_data['login_id'];
                $cart = $this->cart_history->where(['customer_id'=>$user_id, 'status'=>'Active'])->findAll();
                $count = count($cart);
                $customers = $this->customer->find($user_id);
                $pruducts = new ProductsModel();
                $this->order = new ProductOrders();
                $orders = $this->order->where('customer_id', $user_id)->findAll();
            }
        }
        
        $pageData = [
            'title'         => 'Profile',
            'description'   => 'This is the index page',
            'keywords'      => 'Healthcare',
            'user_details'  => $this->user,
            'menu_lists'    => $this->final_menu,
            'cart'          => $count,
            'customer'      => $customers,
            'orders'        => $orders,
            'colors'        => $this->colors,
            'cart'          => cart_history(),
        ];
        return view($this->user['theme_name'].'/'.'frontend/account', $pageData);
        
    }

    public function register(){
        
        if (!$this->validate([
            'firstName' => 'required',
            'email' => 'required|is_unique[seo_customers.email]',
            'phone' => 'required|',
            'address' => 'required',
            'password' => 'required',
            'confirmPassword' => 'required',
        ])) {
            echo json_encode(['status' => false, 'message' => "This email is already exists." ]);
        } else {
            
            $image = $this->request->getFile('image');
            
            $image_name = NULL;
            if(!empty($image) && !$image->hasMoved()){
                $image_name = $image->getRandomName();
                $image->move(env('SEO_SUBPATH')."uploads/theme/customer_profile/", $image_name);
            }

            $data = [ 
                "first_name"=> $this->request->getVar('firstName'),
                "last_name" => $this->request->getVar('lastName'),
                "email"    => $this->request->getVar('email'),
                "phone"    => $this->request->getVar('phone'),
                "password" => base64_encode($this->request->getVar('password')),
                "user_type"=> 'Customer',
                "address"  => $this->request->getVar('address'),
                "image"    => $image_name,
            ];

            if($this->customer->insert($data)){
                // $last_id = $this->customer->insertId();
                // $add_arr = [
                //     "address"     => $this->request->getVar('address'),
                //     'customer_id' => $last_id,
                // ];
                // $this->customer_add->insert($add_arr);
                echo json_encode(['status' => true, 'message' => "User account created successfully."]);
            }else{
                echo json_encode(['status' => false, 'message' => "User account create unsuccessfully."]);
            }
        }
    }

    public function addToCart($id){
        if ($this->session->has('login_user')) {
            $user_data = $this->session->get('login_user');
            if(isset($user_data['login_type']) && $user_data['login_type']=="Customer"){

            }else{
                echo json_encode(['status'=>false, 'message'=> 'notLogin']);
                exit;
            }
        }else{
            echo json_encode(['status'=>false, 'message'=> 'notLogin']);
            exit;
        }
    }

    public function login(){
        $this->validation->setRules([
            'email'    => 'required|valid_email',
            'password' => 'required',
        ]);
        if($this->validation->withRequest($this->request)->run()){
            
            $email    = $this->request->getVar('email');
            $password = $this->request->getVar('password');
            $customer = $this->customer->where('email', $email)->first();
            
            if(!empty($customer)){
                if($customer['password']==base64_encode($password)){
                    $newdata = [
                        'login_id'    => $customer['id'],
                        'login_user'  => $customer['email'],                 
                        'login_email' => $customer['email'],   
                        "login_type"  => $customer['user_type'],
                    ];                 
                    $this->session->set('login_user', $newdata);  
                    $data = [
                        'status' => true,
                        'message'=> 'Login Successfully',
                    ];
                    echo json_encode($data);
                    exit; 
                }else{
                    $data = [
                        'status' => false,
                        'type'   => 'password',
                        'message'=> 'Wrong password!',
                    ];
                    echo json_encode($data);
                    exit; 
                }
            }else{
                $data = [
                    'status' => false,
                    'type'   => 'email',
                    'message'=> 'Email id is not registered. Please register!',
                ];
                echo json_encode($data);
                exit;
            }
        }else{
            $errors = $this->validation->getErrors();
            $data = [
                'status' => false,
                'message'=> $errors,
            ];
            echo json_encode($data);
            exit;
        }
    }

    public function changeProfileImg(){
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
            if(isset($user_data['login_type']) && $user_data['login_type'] == 'Customer'){
                $user_id = $user_data['login_id'];
                $customer = $this->customer->select('image')->find($user_id);
                
                $image_name = null;
                $file = $this->request->getFile("profile");
                if($file->isValid() && !$file->hasMoved()){
                    
                    $image_name =  $file->getRandomName();
                    $file->move(env('SEO_SUBPATH')."uploads/theme/customer_profile/", $image_name);

                    $old_image = env('SEO_SUBPATH')."uploads/theme/customer_profile/".$customer['image'];
                    if(file_exists($old_image)){
                        unlink($old_image);
                    }

                    $data = ['image'=> $image_name];
                    if($this->customer->update($user_id, $data)){
                        return $image_name;
                    }
                }
            }
        }
    }

    public function updateProfile(){
        
        $this->validation->setRules([
            'inputEmailAddress'    => 'required|valid_email',
            'inputFirstName' => 'required',
            'inputPhone' => 'required',
            'inputLocation' => 'required',
        ]);
        if($this->validation->withRequest($this->request)->run()){
            
            $first_name  = $this->request->getVar('inputFirstName');
            $last_name   = $this->request->getVar('inputLastName');
            $email       = $this->request->getVar('inputEmailAddress');
            $phone       = $this->request->getVar('inputPhone');
            $dob         = $this->request->getVar('birthday');
            $address     = $this->request->getVar('inputLocation');
            
            if($this->session->has('login_user')){
                $user_data = $this->session->get('login_user');
                if(isset($user_data['login_type']) && $user_data['login_type'] == 'Customer'){
                    $user_id = $user_data['login_id'];
                    
                    $data = [
                        "first_name" => $first_name,
                        "last_name" => $last_name,
                        "email" => $email,
                        "phone" => $phone,
                        "dob" => $dob,
                        "address" => $address,
                    ];
                    
                    $this->customer->update($user_id, $data);
                    $data = [
                        'status' => true,
                        'message'=> "Profile updated successfully.",
                    ];
                    // $this->session->setFlashdata("message", "Profile updated successfully.");
                    // return redirect()->back();
                    echo json_encode($data);
                    exit;
                }
            }
            
        }else{
            $errors = $this->validation->getErrors();
            $data = [
                'status' => false,
                'message'=> $errors,
            ];
            // return redirect()->back();
            echo json_encode($data);
            exit;
        }
    }

    public function changePassword(){
        $this->validation->setRules([
            'currentPassword'    => 'required',
            'newPassword' => 'required',
            'confirmPassword' => 'required',
        ]);
        if($this->validation->withRequest($this->request)->run()){
            
            $current_password  = $this->request->getVar('currentPassword');
            $new_password      = $this->request->getVar('newPassword');
            $confirm_password  = $this->request->getVar('confirmPassword');
            
            if($this->session->has('login_user')){
                $user_data = $this->session->get('login_user');
                if(isset($user_data['login_type']) && $user_data['login_type'] == 'Customer'){
                    $user_id = $user_data['login_id'];
                    $customer = $this->customer->select('password')->find($user_id);
                    if($customer['password'] == base64_encode($current_password)){
                        $val = [
                            'password' => base64_encode($new_password),
                        ];
                        $customer = $this->customer->update($user_id, $val);
                        $data = [
                            'status' => true,
                            'message'=> "Password updated successfully.",
                        ];
                        echo json_encode($data);
                        exit;
                    }
                
                    $data = [
                        'status' => false,
                        'error'  => 'old',
                        'message'=> "Old password is incorrect.",
                    ];
                    echo json_encode($data);
                    exit;
                }
            }
            
        }else{
            $errors = $this->validation->getErrors();
            $data = [
                'status' => false,
                'message'=> $errors,
            ];
            echo json_encode($data);
            exit;
        }
    }

    public function forgotPassword(){
       
        $email    = $this->request->getVar('email');
        $customer = $this->customer->where('email', $email)->first();
        
        //First two charters
        $first_charters = substr($email,0,2);
        //Last 9 charters
        $last_charters  = substr($email,-9);
        
        if(!empty($customer)){
            $subject = "Forgot password with verification code";
            $random_number = rand(100000,999999);
            $message = $random_number." is your verification code.<br/>
                        Please verify your code and forgot password. <br/>
                        Do not share the OTP with anyone. #".$random_number;
            $res = email_send('biru.sartia@gmail.com', $subject, $message);
            $val = [
                'reset_token' => $random_number,
                'reset_time'  => time(),
            ];
            $this->customer->update($customer['id'], $val);
            if($res){
                $data = [
                    'status' => true,
                    'message'=> 'OTP has been sent to '.$first_charters."****************".$last_charters,
                ];
                echo json_encode($data);
                exit;
            }
        }else{
            $data = [
                'status' => false,
                'type'   => 'email',
                'message'=> 'Email id is not registered.',
            ];
            echo json_encode($data);
            exit;
        }
        
    }


    public function verifyCode(){
        $email = $this->request->getVar('email');
        $otp   = $this->request->getVar('otp');
        $customer = $this->customer->where('email', $email)->first();
            
        if(!empty($customer) && $customer['reset_token'] == $otp){
            $data = [
                'status' => true,
                'message'=> '',
            ];
            echo json_encode($data);
            exit;
        }else{
            $data = [
                'status' => false,
                'message'=> 'Your verification code is incorrect, Please enter valid code.',
            ];
            echo json_encode($data);
            exit;
        }
    }

    public function updatePassword(){
        $email = $this->request->getVar('email');
        $password   = $this->request->getVar('password');
        $conf_pass  = $this->request->getVar('confPass');
        if($password==$conf_pass){
            $customer = $this->customer->where('email', $email)->first();
            if(!empty($customer)){
                $val = [
                    'reset_token' => NULL,
                    'reset_time'  => time(),
                    'password'    => base64_encode($conf_pass),
                ];
                $res = $this->customer->update($customer['id'], $val);
                if($res){
                    $data = [
                        'status' => true,
                        'message'=> 'Your password changed successfully.',
                    ];
                    echo json_encode($data);
                    exit;
                }
            }else{
                $data = [
                    'status' => false,
                    'type'   => 'email',
                    'message'=> 'Email id is not registered.',
                ];
                echo json_encode($data);
                exit;
            }
        }else{
            $data = [
                'status' => false,
                'message'=> 'Password and confirm password are not matched.',
            ];
            echo json_encode($data);
            exit;
        }
    }

    

    public function signout(){
        $this->session->destroy();
        return redirect()->to(base_url());
    }
}
