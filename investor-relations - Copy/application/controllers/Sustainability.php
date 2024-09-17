<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sustainability extends CI_Controller {

    public $menu;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->overview();

    }


    public function overview() {
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
        $this->load->view('ir/menu', $data);
        $this->load->view('ir/sustainability/overview', $data);
        $this->load->view('ir/footer', $data);

    }


    public function economy() {
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
        $this->load->view('ir/menu', $data);
        $this->load->view('ir/sustainability/overview', $data);
        $this->load->view('ir/footer', $data);

    }


    public function send_mail(){
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_users' => '***',
            'smtp_pass' => '***',
            'smtp_port' =>  465,
            'mailtype' => 'html',
            'charset' => 'utf-8',

        ];

        $this->email->set_newline("\r\n");
        $this->load->library('email',$config); 
        $this->email->initialize($config);

        $this->email->from('Email Sender', 'Full name in email');
        $this->email->to('Recieved email');
        $this->email->subject('Testing');
        $this->email->message('coba coba');

        if($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function aaa(){

        $this->load->library('email');

        $this->email->from('your@example.com', 'Your Name');
        $this->email->to('adinance@gmail.com');
        // $this->email->cc('another@another-example.com');
        // $this->email->bcc('them@their-example.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        $this->email->send();
    }


    

}