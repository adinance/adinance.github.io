<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Corporate_governance extends CI_Controller {

    public $menu = array();
    public $data = array();

    public function __construct() {
        parent::__construct();
        $this->menu['id']    = 'extHeader4-hy';
        $this->menu['class'] = 'cid-uqv7duy8kw';
    }

    public function policy() {

        $this->data['menu_id']                                                 = $this->menu['id'];
        $this->data['menu_class']                                              = $this->menu['class'];
        isset($this->session->corporate_governance) ? $this->data['menu_main'] = $this->session->corporate_governance : $this->data['menu_main'] = $this->utilities->method_to_menu($this->router->fetch_class());
        isset($this->session->policy) ? $this->data['menu']                    = $this->session->policy : $this->data['menu']                    = $this->utilities->method_to_menu('policy');
        isset($this->session->whistleblowing_form) ? $this->data['menu_right'] = $this->session->whistleblowing_form : $this->data['menu_right'] = $this->utilities->method_to_menu('whistleblowing_form');
        $this->data['menu_right_url']                                          = BASE_URL . $this->utilities->method_to_link('whistleblowing_form');
        $this->data['menu_left']                                               = '';
        $this->data['menu_left_url']                                           = NULL;

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/corporate_governance/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function whistleblowing_form() {

        $this->data['menu_id']                                                 = $this->menu['id'];
        $this->data['menu_class']                                              = $this->menu['class'];
        isset($this->session->corporate_governance) ? $this->data['menu_main'] = $this->session->corporate_governance : $this->data['menu_main'] = $this->utilities->method_to_menu($this->router->fetch_class());
        isset($this->session->whistleblowing_form) ? $this->data['menu']       = $this->session->whistleblowing_form : $this->data['menu']       = $this->utilities->method_to_menu('whistleblowing_form');
        $this->data['menu_right']                                              = NULL;
        $this->data['menu_right_url']                                          = NULL;
        isset($this->session->policy) ? $this->data['menu_left']               = $this->session->policy : $this->data['menu_left']               = $this->utilities->method_to_menu('policy');
        $this->data['menu_left_url']                                           = BASE_URL . $this->utilities->method_to_link('policy');

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        // $this->load->view('ir/corporate_governance/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/corporate_governance/whistleblowing_form', $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function send() {

        if (!empty($this->input->post())) {

            $name      = $this->input->post('name');
            $telephone = $this->input->post('telephone');
            $email     = $this->input->post('email');
            $subject   = $this->input->post('subject');
            $message   = $this->input->post('message');
            $res_dev   = $this->mandrill->send(EMAIL_DEVELOPER, 'Whistleblowing', $name, $telephone, $email, $subject, $message);
            $res       = $this->mandrill->send(EMAIL_ADINAN, 'Whistleblowing', $name, $telephone, $email, $subject, $message);

            // echo '<pre>';
            // var_dump($this->input->post());
            // var_dump($res);

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

            $this->whistleblowing_form();
            // redirect(BASE_URL . 'whistleblowing_form', 'refresh');

        }

    }

}