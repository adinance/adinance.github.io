<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Info_request extends CI_Controller {

    public $menu = array();
    public $data = array();

    public function __construct() {
        parent::__construct();
        $this->menu['id']    = 'extHeader4-i0';
        $this->menu['class'] = 'cid-uqv7eKTXxO';
    }

    public function ir_contact() {

        $this->data['menu_id']                                          = $this->menu['id'];
        $this->data['menu_class']                                       = $this->menu['class'];
        isset($this->session->info_request) ? $this->data['menu_main']  = $this->session->info_request : $this->data['menu_main']  = $this->utilities->method_to_menu($this->router->fetch_class());
        isset($this->session->ir_contact) ? $this->data['menu']         = $this->session->ir_contact : $this->data['menu']         = $this->utilities->method_to_menu('ir_contact');
        isset($this->session->email_alerts) ? $this->data['menu_right'] = $this->session->email_alerts : $this->data['menu_right'] = $this->utilities->method_to_menu('email_alerts');
        $this->data['menu_right_url']                                   = BASE_URL . $this->utilities->method_to_link('email_alerts');
        $this->data['menu_left']                                        = '';
        $this->data['menu_left_url']                                    = NULL;

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/info_request/ir_contact', $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function email_alerts() {

        $this->data['menu_id']                                         = $this->menu['id'];
        $this->data['menu_class']                                      = $this->menu['class'];
        isset($this->session->info_request) ? $this->data['menu_main'] = $this->session->info_request : $this->data['menu_main'] = $this->utilities->method_to_menu($this->router->fetch_class());
        isset($this->session->email_alerts) ? $this->data['menu']      = $this->session->email_alerts : $this->data['menu']      = $this->utilities->method_to_menu('email_alerts');
        $this->data['menu_right']                                      = NULL;
        $this->data['menu_right_url']                                  = NULL;
        isset($this->session->ir_contact) ? $this->data['menu_left']       = $this->session->ir_contact : $this->data['menu_left']       = $this->utilities->method_to_menu('ir_contact');
        $this->data['menu_left_url']                                   = BASE_URL . $this->utilities->method_to_link('ir_contact');

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/info_request/email_alerts', $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function send() {

        if (!empty($this->input->post())) {

            $name      = $this->input->post('name');
            $telephone = $this->input->post('telephone');
            $email     = $this->input->post('email');
            $subject   = $this->input->post('subject');
            $message   = $this->input->post('message');
            $res       = $this->mandrill->send(EMAIL_DEVELOPER, CONTACT_NAME, $name, $telephone, $email, $subject, $message);

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

            }

            $this->ir_contact();
        }

    }

    public function subscribe() {

        if (!empty($this->input->post())) {

            $subcribe = [
                'status' => 'subscribed',
                'email'  => $this->input->post('email'),
                'name'   => $this->input->post('name'),
            ];

            $res = $this->mailchimp->subscribe($subcribe);

            if ($res == 200) {
                $data['swal'] = $this->swal->sent('success', 'Subscribed Successfull', 'false', 3500);
                $this->load->view('ir/header', $data);
                $this->load->view('ir/sweet-alert', $data);
            } else {
                $data['swal'] = $this->swal->sent('warning', 'Unable to Subscribe at the moment, pls. try again later', 'false', 3500);
                $this->load->view('ir/header', $data);
                $this->load->view('ir/sweet-alert', $data);
            }

        }

        $this->email_alerts();

    }

}