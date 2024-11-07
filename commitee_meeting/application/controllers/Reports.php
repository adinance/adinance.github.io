<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

    public $user;
    public $data;

    public function __construct() {
        parent::__construct();
        $this->data         = array();
        $this->user         = $this->authen->permission();
        $this->data['user'] = $this->user;
    }

    public function index() {
        // $this->access_logs();
        $this->load->view('reports/data_table', $this->data);
    }

    public function last_connection() {
        $this->data['result'] = $this->reports->access_list();

        $this->load->view('apps/header', $this->data);
        $this->load->view('apps/menu', $this->data);
        $this->load->view('reports/last_connection', $this->data);
        $this->load->view('apps/footer', $this->data);
    }

    public function access_logs() {
        $this->data['result'] = $this->reports->activity_list();

        // echo '<pre>';
        // var_dump($this->data['result']);

        // exit;

        $this->load->view('apps/header', $this->data);
        $this->load->view('apps/menu', $this->data);
        $this->load->view('reports/access_logs', $this->data);
        $this->load->view('apps/footer', $this->data);
    }


    

}
