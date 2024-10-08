<?php defined('BASEPATH') OR exit('No direct script access allowed');

// require_once('libraries/Utilities.php');

class Publications extends CI_Controller {

    public $menu;
    public $data;

    public function __construct() {
        parent::__construct();
        $this->data = array();
        $this->menu = $this->utilities->method_to_menu($this->router->fetch_method());

    }

    public function index() {
        $this->annual_report();
    }

    public function annual_report() {

        isset($this->session->annual_report) ? $this->data['menu'] = $this->session->annual_report : $this->data['menu'] = 'Annua Report';
        $this->data['menu_left'] = '';
        $this->data['menu_left_url']                                       = NULL;
        isset($this->session->presentations_and_webcasts) ? $this->data['menu_right'] = $this->session->presentations_and_webcasts : $this->data['menu_right'] = 'Presentations & Webcasts';
        $this->data['menu_right_url']                                      = BASE_URL . 'presentations-and-webcasts';

        $this->data['result'] = $this->apps->get_annual_report_list_by_configuration_id(4);

        // echo '<pre>';
        // var_dump($this->data['result']);
        // echo $this->db->last_query();
        // exit();
        // exit();
        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/publications/annual_report', $this->data);
        $this->load->view('ir/footer', $this->data);
     
    }

    public function presentations_and_webcasts() {

        isset($this->session->presentations_and_webcasts) ? $this->data['menu'] = $this->session->presentations_and_webcasts : $this->data['menu'] = 'Presentations & Webcasts';
        isset($this->session->annual_report) ? $this->data['menu_left'] = $this->session->annual_report : $this->data['menu_left'] = 'Annual Report';
        $this->data['menu_left_url']                                       = BASE_URL . 'annual-report';
        $this->data['menu_right'] = '';
        $this->data['menu_right_url']                                      = NULL;

        $this->data['result'] = $this->apps->get_file_by_configuration_id(4);

        // echo '<pre>';
        // var_dump($this->data['result']);
        // echo $this->db->last_query();
        // exit();
        // exit();
        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/publications/presentations_and_webcasts', $this->data);
        $this->load->view('ir/footer', $this->data);


        // $this->data = array();
        // $this->data['menu']       = 'PRESENTATIONS & WEBCASTS';
        // $this->data['menu_right'] = 'Analyst Coverage';
        // $this->data['menu_right_url'] = BASE_URL . 'analyst_coverage';
        
        // $this->data['menu_left']  = 'Company Factsheet';
        // $this->data['menu_left_url']  = BASE_URL . 'company_factsheet';
        // isset($this->session->annual_coverage) ? $this->data['menu'] = $this->session->annual_coverage : $this->data['menu']  = 'PRESENTATIONS & WEBCASTS'; 
        // isset($this->session->presentation_webcasts) ? $this->data['menu_left'] = $this->session->presentation_webcasts : $this->data['menu_left']  = 'Company Factsheet'; 
        // isset($this->session->presentation_webcasts) ? $this->data['menu_right'] = $this->session->presentation_webcasts : $this->data['menu_right']  = 'Analyst Coverage'; 

        // $this->data["broker"] = $this->publication_model->get_tb_analyst_coverage();
        // $this->data["present"] = $this->publication_model->get_tb_pre_webcast();
        // $this->data["year"] = $this->publication_model->get_tb_pre_year();
        // $this->load->view('ir/header', $this->data);
        // $this->load->view('ir/navigation', $this->data);
        // //$this->load->view('debugs', $this->data);
        // $this->load->view('ir/menu', $this->data);
        // $this->load->view('ir/footer', $this->data);
    }


}
