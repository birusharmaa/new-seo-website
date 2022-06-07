<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CustomerModel;
use App\Models\CustomerAddressModel;
use App\Models\CartHistoryModel;
use App\Models\ProductsModel;

class CartController extends UiController{   
    protected $customer     = "";
    protected $customer_add = "";
    protected $session      = "";
    protected  $validation  = "";
    public function __construct(){
        parent::__construct();
        $this->customer     = new CustomerModel();
        $this->customer_add = new CustomerAddressModel();
        $this->session      = session();
        $this->validation   =  \Config\Services::validation();
        $this->carts        = new CartHistoryModel();
        $this->products     = new ProductsModel();
        
    }

    public function index($id = null){
        $cart_history = "";
        $count = 0;
        // $this->session->destroy()
        if ($this->session->has('login_user')) {
            $user_data = $this->session->get('login_user');
            if(isset($user_data['login_type']) && $user_data['login_type']=="Customer"){
                $this->carts->select(['seo_cart_history.id','seo_cart_history.customer_id',
                'seo_cart_history.quantity',
                'seo_products.product_name', 'seo_products.id as prud_id', 
                'seo_products.total_inventry', 'seo_products.mrp','seo_products.discount',
                'seo_products.main_image','seo_products.extra_charge',
                'seo_products.banner', 'seo_products.related_product', 
                'seo_products.short_description', 'seo_products.long_description', 
                'seo_products.specification'
                ]);
                $this->carts->join('seo_products', 'seo_products.id=seo_cart_history.product_id', 'left');
                $cart_history = $this->carts->where(['customer_id'=> $user_data['login_id'], 'seo_cart_history.status'=>'Active', 'seo_products.status'=>'1'])->findAll();
                
                $cart = $this->carts->where(['customer_id'=> $user_data['login_id'], 'status'=>'Active'])->findAll();
                $count = count($cart);
            }
        }
        $countries = $this->carts->getCountry();
        $states    = $this->carts->getState(101);

        $pageData = [
            'title'         => 'Order',
            'description'   => 'This is the cart history page',
            'keywords'      => 'Healthcare',
            'user_details'  => $this->user,
            'menu_lists'    => $this->final_menu,
            "cart_history"  => $cart_history,
            'cart'          => $count,
            "countries"     => $countries,
            "states"        => $states,
            'colors'        => $this->colors,
            'cart'          => cart_history(),
        ];

        if(!empty($id)){
            return view($this->user['theme_name'].'/'.'frontend/order', $pageData);
        }
        return view($this->user['theme_name'].'/'.'frontend/cart', $pageData);
    }

    public function addToCart($id){
       
        if ($this->session->has('login_user')) {
            $user_data = $this->session->get('login_user');
            if(isset($user_data['login_type']) && $user_data['login_type']=="Customer"){
                $cart = $this->carts->where(['customer_id'=> $user_data['login_id'], 'product_id'=>$id])->first();
                if(!empty($cart) && $cart['status'] =="Active"){
                    echo json_encode(['status'=>false, 'message'=> 'Product already exists in your cart.']);
                    exit;
                }elseif(!empty($cart)){
                    $data = ['status'=>'Active'];
                    $cart = $this->carts->update($cart['id'], $data);
                    echo json_encode(['status'=>true, 'message'=> 'Product added successfuly in your cart.']);
                    exit;
                }else{
                    $data = [
                        'customer_id' => $user_data['login_id'],     
                        'status'=>'Active',
                        'product_id'=> $id
                    ];
                    $cart = $this->carts->insert($data);
                    echo json_encode(['status'=>true, 'message'=> 'Product added successfuly in your cart.']);
                    exit;
                }
            }else{
                echo json_encode(['status'=>false, 'message'=> 'notLogin']);
                exit;
            }
        }else{
            echo json_encode(['status'=>false, 'message'=> 'notLogin']);
            exit;
        }
    }

    public function removeProduct($id){
        if($id){
            if ($this->session->has('login_user')) {
                $user_data = $this->session->get('login_user');
                if(isset($user_data['login_type']) && $user_data['login_type']=="Customer"){
                    $user_data['login_id'];
                    $cart = $this->carts->find($id);
                    
                    if($cart['customer_id'] == $user_data['login_id']){
                        $data = [
                            'status' => 'Deactive'
                        ];
                        $this->carts->update($id, $data);
                        return true;
                    }
                    return true;
                }
                return true;
            }
            return true;
        }else{
            return true;
        }

    }

    public function productCheckout($id =null){

        if(!empty($id) && $this->session->has('login_user')) {
            $user_data = $this->session->get('login_user');
            if(isset($user_data['login_type']) && $user_data['login_type']=="Customer"){
                $this->carts->select(['seo_cart_history.id','seo_cart_history.customer_id',
                'seo_cart_history.quantity',
                'seo_products.product_name', 'seo_products.id as prud_id', 
                'seo_products.total_inventry', 'seo_products.mrp','seo_products.discount',
                'seo_products.main_image',
                'seo_products.banner', 'seo_products.related_product', 
                'seo_products.short_description', 'seo_products.long_description', 
                'seo_products.specification'
                ]);
                $this->carts->join('seo_products', 'seo_products.id=seo_cart_history.product_id', 'left');
                $cart_history = $this->carts->where(['seo_cart_history.cart_status' =>'Pending','customer_id'=> $user_data['login_id'], 'seo_cart_history.status'=>'Active', 'seo_products.status'=>'1'])->findAll();
                if(!empty($cart_history)){
                    $data = [
                        'status' => true,
                        'message'=> $cart_history  
                    ];
                    echo json_encode($data);
                    exit;
                }else{
                    $data = [
                        'status' => false,
                        'message'=> 'No card found.'  
                    ];
                    echo json_encode($data);
                    exit;
                }
            }else{
                $data = [
                    'status' => false,
                    'message'=> 'User not found.'  
                ];
                echo json_encode($data);
                exit;
            }
        }else{
            $data = [
                'status' => false,
                'message'=> 'User not found.'  
            ];
            echo json_encode($data);
            exit;
        }
    }

    public function changeQuantity(){
        $cart_id = $this->request->getPost('cartId');
        $quantity = $this->request->getPost('quantity');

        if ($this->session->has('login_user')) {
            $user_data = $this->session->get('login_user');
            if(isset($user_data['login_type']) && $user_data['login_type']=="Customer"){
                $this->carts->select(['seo_cart_history.id','seo_cart_history.customer_id',
                    'seo_cart_history.quantity','seo_products.extra_charge',
                    'seo_products.product_name', 'seo_products.id as prud_id', 
                    'seo_products.total_inventry', 'seo_products.mrp','seo_products.discount'
                ]);
                $this->carts->join('seo_products', 'seo_products.id=seo_cart_history.product_id', 'left');
                $cart_history = $this->carts->where(['customer_id'=> $user_data['login_id'], 'seo_cart_history.status'=>'Active', 'seo_products.status'=>'1'])->findAll();

                $cart = $this->carts->where(['id'=>$cart_id, 'customer_id'=>$user_data['login_id'] ])->first();
                if(!empty($cart)){
                    $val = [
                        'quantity' => ($quantity<1)?1:$quantity,
                    ];
                    $this->carts->update($cart_id, $val);
                }
                $data = [
                    'status' => true,
                    'data'   => $cart_history,
                ];
                echo json_encode($data);
                exit;
            }
        }
        $data = [
            'status' => false,
            'data'   => '',
        ];
        echo json_encode($data);
        exit;
    }

}
