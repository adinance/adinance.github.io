<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public $user_agent;

    public function __construct() {
        parent::__construct();

        // get User agent.
        if ($this->ua->is_browser()) {
            $this->user_agent = $this->ua->platform() . ' | ' . $this->ua->browser() . ' ' . $this->ua->version();
        } elseif ($this->user_agent->is_robot()) {
            $this->user_agent = $this->ua->platform() . ' | ' . $this->ua->robot();
        } elseif ($this->user_agent->is_mobile()) {
            $this->user_agent = $this->ua->platform() . ' | ' . $this->ua->mobile();
        } else {
            $this->user_agent = $this->ua->agent_string();
        }

    }

    public function test_swal() {
        $data         = array();
        $data['swal'] = $this->swal->login_fail();

        $this->load->view('auth/login', $data);
    }

    public function test_swal_insert() {
        $data         = array();
        $data['swal'] = $this->swal->insert_success();

        $this->load->view('apps/header', $data);
        $this->load->view('apps/menu', $data);
        $this->load->view('swal', $data);
        $this->load->view('apps/footer', $data);
    }

    public function index() {
        $this->login();
    }

    public function logout() {

        $logs = array(
            'time'           => date('Y-m-d H:i:s'),
            'source_ip'      => $_SERVER['REMOTE_ADDR'],
            'destination_ip' => $_SERVER['SERVER_ADDR'],
            'username'       => $this->session->username,
            'user_agent'     => $this->user_agent,
            'action'         => $this->router->fetch_method(),
        );

        $this->auth->insert_access_logs($logs);

        $this->auth->set_last_logout($this->session->id);
        $this->session->unset_userdata(array('id', 'display', 'username', 'email', 'permission'));
        redirect(BASE_URL . 'auth', 'refresh');
    }

    public function login() {

        $data = array();

        if (!empty($this->input->post())) {

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $result   = $this->auth->login($username, $password);

            if ($result != 0) {

                $this->session->set_userdata(
                    array(
                        'id'         => $result['id'],
                        'display'    => $result['name'],
                        'username'   => $result['username'],
                        'email'      => $result['email'],
                        'permission' => $result['permission'],
                        
                    )
                );
                $this->auth->set_last_login($this->session->id);

                $logs = array(
                    'time'           => date('Y-m-d H:i:s'),
                    'source_ip'      => $_SERVER['REMOTE_ADDR'],
                    'destination_ip' => $_SERVER['SERVER_ADDR'],
                    'username'       => $result['username'],
                    'user_agent'     => $this->user_agent,
                    'action'         => 'login',
                );

                $this->auth->insert_access_logs($logs);

                switch ($result['permission']) {
                case 1:
                    $data['swal'] = $this->swal->login_success(BASE_URL . 'documents');
                    break;
                case 2: // BOD
                    $data['swal'] = $this->swal->login_success(BASE_URL . 'category/2');
                    break;
                case 3: // AC
                    $data['swal'] = $this->swal->login_success(BASE_URL . 'category/1');
                    break;
                case 4:
                    $data['swal'] = $this->swal->login_success(BASE_URL . 'documents');
                    break;
                case 5:
                    $data['swal'] = $this->swal->login_success(BASE_URL . 'category/0');
                    break;
                default:
                    //code block
                }

            } else {

                $data['swal'] = $this->swal->login_fail();

            }
        }

        $this->load->view('auth/login', $data);

    }

}