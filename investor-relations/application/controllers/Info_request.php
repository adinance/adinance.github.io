<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Info_request extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->ir_contact();
    }

    public function ir_contact() {

        $data = array();

        isset($this->session->ir_contact) ? $data['menu'] = $this->session->ir_contact : $data['menu'] = 'IR Contact';

        isset($this->session->email_alerts) ? $data['menu_right'] = $this->session->email_alerts : $data['menu_right'] = 'Email Alert';
        $data['menu_right_url']                                   = BASE_URL . 'subscribe';

        $data['menu_left']     = NULL;
        $data['menu_left_url'] = NULL;

        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        $this->load->view('ir/menu', $data);
        $this->load->view('ir/info_request/ir_contact', $data);
        $this->load->view('ir/footer', $data);

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

            $this->index();
        }

    }

    public function email_alerts() {

        $data = array();

        isset($this->session->email_alerts) ? $data['menu'] = $this->session->email_alerts : $data['menu'] = 'Email Alerts';

        $data['menu_right']     = NULL;
        $data['menu_right_url'] = NULL;

        isset($this->session->ir_contact) ? $data['menu_left'] = $this->session->ir_contact : $data['menu_left'] = 'IR Contact';
        $data['menu_left_url']                             = BASE_URL . 'contact';

        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        $this->load->view('ir/menu', $data);
        $this->load->view('ir/info_request/email_alerts', $data);
        $this->load->view('ir/footer', $data);

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