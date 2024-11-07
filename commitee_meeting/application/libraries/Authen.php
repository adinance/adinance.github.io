<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authen {

    public $ci;

    public function __construct() {
        $this->ci = &get_instance();

    }

    public function permission(){
        if($this->ci->session->userdata('permission')){
            return $this->ci->session->userdata();
        }else{
            redirect(BASE_URL.'login');
        }
    }
}