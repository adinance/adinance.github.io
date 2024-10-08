<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Apps extends CI_Controller {

    public $user;
    public $data;

    public function __construct() {
        parent::__construct();
        $this->data         = array();
    }

    public function index() {
    }

    public function preview($id = '0') {
        $this->data['url']        = $this->apps->get_row($id)->source;
        $this->data['name']        = $this->apps->get_row($id)->name;
        $this->load->view('apps/preview', $this->data);
    }

    public function pdf() {
        // $this->data['url']        = $this->apps->get_row($id)->source;
        // $this->data['name']        = $this->apps->get_row($id)->name;
        $this->load->view('apps/pdf');
    }

}
