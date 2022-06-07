<?php

namespace App\Controllers;

use App\Models\CartHistoryModel;
use Razorpay\Api\Api;
use App\Models\ProductsModel;
use App\Models\PaymentsModel;
use App\Models\ProductOrders;



class PaymentController extends UiController
{   
    protected $customer     = "";
    protected $customer_add = "";
    protected $session      = "";
    protected  $validation  = "";
    public function __construct(){
        parent::__construct();
        $this->session      = session();
        $this->carts        = new CartHistoryModel();
    }

    public function payment(){
        
        $user_id = 0;
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
            if(isset($user_data['login_type']) && $user_data['login_type'] == 'Customer'){
                $user_id = $user_data['login_id'];
            }
        }

        if(empty($this->user['key']) || empty($this->user['secret'])){
            $msg = [
                'status' =>'empty',
                'message'=> 'Payment Credential(key and secret) con\'t be empty or invalid.',
            ];
            echo json_encode($msg);
            exit;
        }
        $api = new Api($this->user['key'], $this->user['secret']);
        $final_products = $this->request->getPost('finalProduct');
        
        $this->product = new ProductsModel();
        $finals = [];
        foreach($final_products as $final_product){
            $product = $this->product->select(['mrp', 'discount','extra_charge'])->where(['id'=>$final_product['product_id'], 'created_by'=> $this->user['id']])->first();
            $product['quantity'] = $final_product['quantity'];
            $finals[] = $product;
        }

        $discount = 0;
        $total_dis= 0;
        $sub_total= 0;
        $final_amount= 0;
        foreach($finals as $final){
            $discount = (($final['mrp'] * $final['quantity']) * ($final['discount'])) / 100;
            $total_dis = $total_dis + $discount;
            $sub_total = ($sub_total+$final['extra_charge']) + ($final['mrp'] * $final['quantity']);
        }
        $final_amount = ($sub_total - $total_dis);
        
        $order_data = [
            'receipt'         => time().$user_id,
            'amount'          => $final_amount* 100,
            'currency'        => 'INR',
            'payment_capture' => 1
        ];

        $response  = $api->order->create($order_data);
        $order_id  = $response['id'];
        $amount    = $response['amount'];
        $currency  = $response['currency'];
        $paymentname = base_url().base_url();
        $company_name = $this->user['company_name'];
        $arr = [
            'order_id'      => $order_id,
            'order_amount'  => $amount,
            'order_currency'=> $currency,
            'order_name'    => $paymentname,
            'company_name'  => $company_name,
        ];
        echo json_encode($arr);
        exit;
    }

    public function paymentfinal(){
        $user_id = 0;
        if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
            if(isset($user_data['login_type']) && $user_data['login_type'] == 'Customer'){
                $user_id = $user_data['login_id'];
            }
        }

        $razorpay_payment_id =$this->request->getPost('razorpay_payment_id');
        $final_products = $this->request->getPost('finalProduct');

        $this->product = new ProductsModel();
        $finals = [];
        $pruducts = []; 
        foreach($final_products as $final_product){
            $product = $this->product->select(['id', 'product_name', 'main_image', 'mrp', 'discount','extra_charge'])->where(['id'=>$final_product['product_id'], 'created_by'=> $this->user['id']])->first();
            $product['quantity'] = $final_product['quantity'];
            $finals[] = $product;

            //Make orders history data for store in db(product_orders table)
            $price = ($product['mrp']+$product['extra_charge'])-(($product['mrp']*$product['discount'])/100);
            $pruducts[] = ['product_id'=> $product['id'], 
                'product_image' => $product['main_image'],
                'product_name'  => $product['product_name'],
                'price'         => $price*$final_product['quantity'],
                'quantity'      => $final_product['quantity'],
                'status'        => 'Ordered',
                'customer_id'   => $user_id,
            ]; 
        }

        

        $discount = 0;
        $total_dis= 0;
        $sub_total= 0;
        $final_amount= 0;
        $extra_charge = 0;
        foreach($finals as $final){
            $discount = (($final['mrp'] * $final['quantity']) * ($final['discount'])) / 100;
            $total_dis = $total_dis + $discount;
            $sub_total = ($sub_total+$final['extra_charge']) + ($final['mrp'] * $final['quantity']);
        }
        $final_amount = ($sub_total - $total_dis);
        
        $api = new Api($this->user['key'], $this->user['secret']);
        if (!empty($razorpay_payment_id)) {
            try {
                $response = $api->payment->fetch($razorpay_payment_id);
                
                if($response['status'] == "captured"){
                    
                    $orders = new ProductOrders();
                    if(count($pruducts)>1){
                        $orders->insertBatch($pruducts);
                    }else{
                        $orders->insert($pruducts[0]);
                    }
                    

                    $data = [
                        "customer_id" => $user_id,
                        "payment_id"  => $response['id'],
                        "order_id"    => $response['order_id'],
                        "discount"    => $total_dis,
                        "final_amount"=> $final_amount,
                        "products_quantity"  => json_encode($final_products),
                    ];
                    $payment = new PaymentsModel();
                    if($payment->insert($data)){
                        
                        foreach($final_products as $final_product){
                            $status = ['status'=>'Paid'];
                            $cart_id = $this->carts->select('id')
                                            ->where(['product_id'=>$final_product['product_id'], 
                                            'customer_id'=> $this->user['id']])->first();
                            $this->carts->update($cart_id['id'], $status);
                        }
                        
                        $msg = [
                            'status' =>true,
                            'message'=> 'Your order created successfully.',
                        ];
                        echo json_encode($msg);
                        exit;
                    }


                }

                
            } catch (\Exception $e) {
                return $e->getMessage();
                session()->setFlashdata("error", $e->getMessage());
                return redirect()->back();
            }
        }
        $msg = [
            'status' =>false,
            'message'=> 'Your order created successfully.',
        ];
        echo json_encode($msg);
        exit;
        // echo '<pre>';
        // print_r($response); 
        // exit;
    }

}
