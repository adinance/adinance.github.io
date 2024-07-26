<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public $menu;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data               = array();

        isset($this->session->sustainability) ? $data['menu'] = $this->session->sustainability : $data['menu']  = $this->utilities->method_to_menu($this->router->fetch_class());
        $data['menu_right'] = NULL;
        $data['menu_right_url'] = NULL;
        isset($this->session->policy) ? $data['menu_left'] = $this->session->policy : $data['menu_left']  = 'Policy'; 
        $data['menu_left_url']  = BASE_URL . 'policy';


        // $data['menu']           = $this->menu;
        // $data['menu_right']     = NULL;
        // $data['menu_right_url'] = NULL;
        // $data['menu_left']      = NULL;
        // $data['menu_left_url']  = NULL;

        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        // $this->load->view('debugs', $data);
        // $this->load->view('ir/menu', $data);
        $this->load->view('ir/home', $data);
        $this->load->view('ir/footer', $data);
    }


    


    

}