<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public $menu;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data               = array();

        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        // $this->load->view('debugs', $data);

        $this->load->view('ir/home', $data);
        $this->load->view('ir/footer', $data);
    }

    public function test(){
        $data               = array();
        $this->load->view('ir/header', $data);
        // $this->load->view('ir/navigation', $data);
        $this->load->view('ir/test');
        $this->load->view('ir/footer', $data);

    }


    


    

}