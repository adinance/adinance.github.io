<?php defined('BASEPATH') OR exit('No direct script access allowed');

// require_once('libraries/Utilities.php');

class Publications extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('publication_model');
    }

    public function index() {
        $this->annual_report();
    }

    public function annual_report1() {
        $data = array();

        $data['menu']       = '56-1 ONE REPORT';
        $data['menu_right'] = 'Company Factsheet';
        $data['menu_right_url'] = BASE_URL . 'company_factsheet';
        
        $data['menu_left'] =  NULL;
        $data['menu_left_url']  = NULL;
        isset($this->session->annual_report) ? $data['menu'] = $this->session->annual_report : $data['menu']  = '56-1 ONE REPORT'; 
        isset($this->session->company_factsheet) ? $data['menu_right'] = $this->session->company_factsheet : $data['menu_right']  = 'Company Factsheet'; 


        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        $this->load->view('ir/menu', $data);
        // $this->load->view('debugs', $data);
        $data["detail"] = $this->publication_model->get_tb_annual_report(); 
        $data["detail_all"] = $this->publication_model->get_tb_annual_report_all();
        //$this->load->view('debugs', $data);
        $this->load->view('ir/publications/annual_report', $data);
        $this->load->view('ir/footer', $data);
    }

    public function annual_report() {

        // $data               = array();

        // isset($this->session->policy) ? $data['menu'] = $this->session->policy : $data['menu']  = 'Policy'; 

        // isset($this->session->whistleblowing_form) ? $data['menu_right'] = $this->session->whistleblowing_form : $data['menu_right']  = 'Whistleblowing Form'; 
        // $data['menu_right_url'] = BASE_URL . 'whistleblowing';
        
        // $data['menu_left']  = NULL;
        // $data['menu_left_url']  = NULL;

        // $this->load->view('ir/header', $data);
        // $this->load->view('ir/navigation', $data);
        // $this->load->view('ir/menu', $data);
        // $this->load->view('ir/corporate_governance/policy', $data);
        // $this->load->view('ir/footer', $data);

        $data = array();

        $data['menu']       = '56-1 ONE REPORT';
        $data['menu_right'] = 'Company Factsheet';
        $data['menu_right_url'] = BASE_URL . 'company_factsheet';
        
        $data['menu_left'] =  NULL;
        $data['menu_left_url']  = NULL;
        isset($this->session->annual_report) ? $data['menu'] = $this->session->annual_report : $data['menu']  = '56-1 ONE REPORT'; 
        isset($this->session->company_factsheet) ? $data['menu_right'] = $this->session->company_factsheet : $data['menu_right']  = 'Company Factsheet'; 


        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        $this->load->view('ir/menu', $data);
        
        $data["detail"] = $this->publication_model->get_tb_annual_report(); 
        $data["detail_all"] = $this->publication_model->get_tb_annual_report_all();
        //$this->load->view('debugs', $data);
        $this->load->view('ir/publications/annual_report', $data);
        $this->load->view('ir/footer', $data);
    }

    public function analyst_coverage() {
        $data = array();

        $data['menu']       = 'ANALYST COVERAGE';
        $data['menu_right'] = NULL;
        $data['menu_right_url'] = NULL;
        
        $data['menu_left']  = 'Presentations & Webcasts';
        $data['menu_left_url']  = BASE_URL . 'presentations_and_webcasts';
        isset($this->session->annual_coverage) ? $data['menu'] = $this->session->annual_coverage : $data['menu']  = 'ANALYST COVERAGE'; 
        isset($this->session->presentations_and_webcasts) ? $data['menu_left'] = $this->session->presentations_and_webcasts : $data['menu_left']  = 'Presentations & Webcasts'; 
        
        
        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        //$this->load->view('debugs', $data);
        $this->load->view('ir/menu', $data);
        $data["broker"] = $this->publication_model->get_tb_analyst_coverage();
        $this->load->view('ir/publications/analyst_coverage', $data);
        $this->load->view('ir/footer', $data);
    }

    public function company_factsheet() {
        $data = array();
        $data['menu']       = 'COMPANY FACTSHEET';
        $data['menu_left'] = '56-1 One Report';
        $data['menu_left_url'] = BASE_URL . 'annual_report';
        
        $data['menu_right']  = 'Presentations & Webcasts';
        $data['menu_right_url']  = BASE_URL . 'presentations_and_webcasts';
        isset($this->session->annual_coverage) ? $data['menu'] = $this->session->annual_coverage : $data['menu']  = 'COMPANY FACTSHEET'; 
        isset($this->session->annual_report) ? $data['menu_left'] = $this->session->annual_report : $data['menu_left']  = '56-1 One Report'; 
        isset($this->session->presentations_and_webcasts) ? $data['menu_right'] = $this->session->presentations_and_webcasts : $data['menu_right']  = 'Presentations & Webcasts';

        $data["factsheet"] = $this->publication_model->get_tb_company_factsheet();
        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        //$this->load->view('debugs', $data);
        $this->load->view('ir/menu', $data);
        $this->load->view('ir/publications/company_fact', $data);
        $this->load->view('ir/footer', $data);
    }

    public function presentations_and_webcasts() {
        $data = array();
        $data['menu']       = 'PRESENTATIONS & WEBCASTS';
        $data['menu_right'] = 'Analyst Coverage';
        $data['menu_right_url'] = BASE_URL . 'analyst_coverage';
        
        $data['menu_left']  = 'Company Factsheet';
        $data['menu_left_url']  = BASE_URL . 'company_factsheet';
        isset($this->session->annual_coverage) ? $data['menu'] = $this->session->annual_coverage : $data['menu']  = 'PRESENTATIONS & WEBCASTS'; 
        isset($this->session->presentation_webcasts) ? $data['menu_left'] = $this->session->presentation_webcasts : $data['menu_left']  = 'Company Factsheet'; 
        isset($this->session->presentation_webcasts) ? $data['menu_right'] = $this->session->presentation_webcasts : $data['menu_right']  = 'Analyst Coverage'; 

        $data["broker"] = $this->publication_model->get_tb_analyst_coverage();
        $data["present"] = $this->publication_model->get_tb_pre_webcast();
        $data["year"] = $this->publication_model->get_tb_pre_year();
        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        //$this->load->view('debugs', $data);
        $this->load->view('ir/menu', $data);
        $this->load->view('ir/publications/present-webcasts', $data);
        $this->load->view('ir/footer', $data);
    }


}
