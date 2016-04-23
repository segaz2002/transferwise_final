<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require(APPPATH.'libraries/REST_Controller.php');

class Users extends REST_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('user');
        $this->load->config('transferservice', TRUE);
        $this->errorCode = $this->config->item('errorCode','transferservice');
        $this->errorDescription = $this->config->item('errorDescription','transferservice');
    }

    public function assign_get(){
        $user_code  = ($this->get('code') != '') ? $this->get('code') :  null ;
        if($user_code){
            $this->response($user_code,200);
        }else{
            $this->response(null,202);
        }
    }




}
