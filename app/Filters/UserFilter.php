<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ValidateUserModel;

class userFilter implements FilterInterface
{
    /**
     * Do whatever processing this filter needs to do.
     * By default it should not return anything during
     * normal execution. However, when an abnormal state
     * is found, it should return an instance of
     * CodeIgniter\HTTP\Response. If it does, script
     * execution will end and that Response will be
     * sent back to the client, allowing for error pages,
     * redirects, etc.
     *
     * @param RequestInterface $request
     * @param array|null       $arguments
     *
     * @return mixed
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        $headers = apache_request_headers();
        
        $email     = isset($headers['email'])?$headers['email']:"";
        $password  = isset($headers['password'])?$headers['password']:"";
        
        if(is_null($email) || empty($email)) {
            $response = service('response');
            $response->setBody('Please enter email address.');
            $response->setStatusCode(401);
            return $response;
        }

        if(is_null($password) || empty($password)) {
            $response = service('response');
            $response->setBody('Please enter your password.');
            $response->setStatusCode(401);
            return $response;
        }
        
        if(!empty($email) && !empty($password)){
            $validate_model = new ValidateUserModel();
            $condition = ['email' => $email];
            $data = $validate_model->where($condition)->first();
            
            if (!password_verify($data['password'], $password)) {
                echo "Invalid credentials";
                exit();
            }
        }
    }

    /**
     * Allows After filters to inspect and modify the response
     * object as needed. This method does not allow any way
     * to stop execution of other after filters, short of
     * throwing an Exception or Error.
     *
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     * @param array|null        $arguments
     *
     * @return mixed
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //
    }
}
