<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sustainability extends CI_Controller {

    public $menu = array();
    public $data = array();

    public function __construct() {
        parent::__construct();
        $this->menu['id']    = 'extHeader4-hz';
        $this->menu['class'] = 'cid-uqv7eezxa8';
    }

    public function index() {
        $this->overview();
    }

    public function overview() {
        
        $this->data['menu_id']    = $this->menu['id'];
        $this->data['menu_class'] = $this->menu['class'];

        isset($this->session->sustainability) ? $this->data['menu_main'] = $this->session->sustainability : $this->data['menu_main'] = $this->utilities->method_to_menu($this->router->fetch_method());
        isset($this->session->overview) ? $this->data['menu']            = $this->session->overview : $this->data['menu']            = 'Overview';
        isset($this->session->economy) ? $this->data['menu_right']       = $this->session->economy : $this->data['menu_right']       = 'Economy';
        $this->data['menu_right_url']                                    = BASE_URL . 'economy';
        $this->data['menu_left']                                         = '';
        $this->data['menu_left_url']                                     = NULL;

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/sustainability/overview', $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function economy() {

        $this->data['menu_id']    = $this->menu['id'];
        $this->data['menu_class'] = $this->menu['class'];

        isset($this->session->sustainability) ? $this->data['menu_main'] = $this->session->sustainability : $this->data['menu_main'] = $this->utilities->method_to_menu($this->router->fetch_method());
        isset($this->session->economy) ? $this->data['menu']             = $this->session->economy : $this->data['menu']             = 'Economy';
        isset($this->session->overview) ? $this->data['menu_left']       = $this->session->overview : $this->data['menu_left']       = 'Overview';
        $this->data['menu_left_url']                                     = BASE_URL . 'overview';
        isset($this->session->environment) ? $this->data['menu_right']   = $this->session->environment : $this->data['menu_right']   = 'Environment';
        $this->data['menu_right_url']                                    = BASE_URL . 'environment';

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/sustainability/economy', $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function environment() {

        $this->data['menu_id']    = $this->menu['id'];
        $this->data['menu_class'] = $this->menu['class'];

        isset($this->session->sustainability) ? $this->data['menu_main'] = $this->session->sustainability : $this->data['menu_main'] = $this->utilities->method_to_menu($this->router->fetch_method());
        isset($this->session->environment) ? $this->data['menu']         = $this->session->environment : $this->data['menu']         = $this->utilities->method_to_menu($this->router->fetch_class());
        isset($this->session->economy) ? $this->data['menu_left']        = $this->session->economy : $this->data['menu_left']        = 'Economy';
        $this->data['menu_left_url']                                     = BASE_URL . 'economy';
        isset($this->session->social) ? $this->data['menu_right']        = $this->session->social : $this->data['menu_right']        = 'Social';
        $this->data['menu_right_url']                                    = BASE_URL . 'social';

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/sustainability/environment', $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function social() {
        $this->data = array();

        $this->data['menu_id']    = $this->menu['id'];
        $this->data['menu_class'] = $this->menu['class'];

        isset($this->session->sustainability) ? $this->data['menu_main'] = $this->session->sustainability : $this->data['menu_main'] = $this->utilities->method_to_menu($this->router->fetch_method());
        isset($this->session->social) ? $this->data['menu']              = $this->session->social : $this->data['menu']              = $this->utilities->method_to_menu($this->router->fetch_class());
        $this->data['menu_right']                                        = NULL;
        $this->data['menu_right_url']                                    = NULL;
        isset($this->session->environment) ? $this->data['menu_left']    = $this->session->environment : $this->data['menu_left']    = 'Environment';
        $this->data['menu_left_url']                                     = BASE_URL . 'environment';

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/sustainability/social', $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function send_mail() {
        $config = [
            'protocol'   => 'smtp',
            'smtp_host'  => 'ssl://smtp.googlemail.com',
            'smtp_users' => '***',
            'smtp_pass'  => '***',
            'smtp_port'  => 465,
            'mailtype'   => 'html',
            'charset'    => 'utf-8',

        ];

        $this->email->set_newline("\r\n");
        $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->from('Email Sender', 'Full name in email');
        $this->email->to('Recieved email');
        $this->email->subject('Testing');
        $this->email->message('coba coba');

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function aaa() {

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