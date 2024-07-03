<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Corporate_governance extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->whistleblowing_form();
    }

    public function whistleblowing_form() {

        $data               = array();

        isset($this->session->whistleblowing_form) ? $data['menu'] = $this->session->whistleblowing_form : $data['menu']  = 'Whistleblowing Form'; 
        $data['menu_right'] = NULL;
        $data['menu_right_url'] = NULL;
        isset($this->session->policy) ? $data['menu_left'] = $this->session->policy : $data['menu_left']  = 'Policy'; 
        $data['menu_left_url']  = BASE_URL . 'policy';



        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        // $this->load->view('debugs', $data);
        $this->load->view('ir/menu', $data);
        $this->load->view('ir/corporate_governance/whistleblowing_form', $data);
        $this->load->view('ir/footer', $data);

    }

    public function send() {

        if (!empty($this->input->post())) {

            $name      = $this->input->post('name');
            $telephone = $this->input->post('telephone');
            $email     = $this->input->post('email');
            $subject   = $this->input->post('subject');
            $message   = $this->input->post('message');
            $res       = $this->mandrill->send(EMAIL_DEVELOPER, 'Whistleblowing', $name, $telephone, $email, $subject, $message);

            $value = json_decode($res);
            $type  = gettype($value);

            $status = NULL;
            if ($type == 'array') {
                for ($i = 0; $i < count($value); $i++) {
                    $status = $value[$i]->status;
                }
            } else { // object, string, etc.
                $status = $value->status;
            }

            if ($status == 'sent') {

                $data['swal'] = $this->swal->sent('success', 'Message Sent!', 'false', 3500);
                $this->load->view('ir/header', $data);
                $this->load->view('ir/sweet-alert', $data);
                // $this->load->view('ir/footer', $data);
            }

            $this->index();
        }

    }

    public function policy() {

        $data               = array();

        isset($this->session->policy) ? $data['menu'] = $this->session->policy : $data['menu']  = 'Policy'; 

        isset($this->session->whistleblowing_form) ? $data['menu_right'] = $this->session->whistleblowing_form : $data['menu_right']  = 'Whistleblowing Form'; 
        $data['menu_right_url'] = BASE_URL . 'whistleblowing';
        
        $data['menu_left']  = NULL;
        $data['menu_left_url']  = NULL;

        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        $this->load->view('ir/menu', $data);
        $this->load->view('ir/corporate_governance/policy', $data);
        $this->load->view('ir/footer', $data);


    }

}