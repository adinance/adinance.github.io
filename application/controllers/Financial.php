<?php defined('BASEPATH') OR exit('No direct script access allowed');

// require_once('libraries/Utilities.php');

class Financial extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('financial_model');
    }

    public function highlights() {
        $data = array();

        $data['menu']       = 'FINANCIAL HIGHLIGHTS';
        $data['menu_right'] = 'Financial Statements';
        $data['menu_right_url'] = BASE_URL . 'statements';
        
        $data['menu_left'] =  NULL;
        $data['menu_left_url']  = NULL;
        isset($this->session->annual_coverage) ? $data['menu'] = $this->session->annual_coverage : $data['menu']  = 'FINANCIAL HIGHLIGHTS'; 
        isset($this->session->statements) ? $data['menu_right'] = $this->session->statements : $data['menu_right']  = 'Financial Statements'; 

        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        $this->load->view('ir/menu', $data);
        //$this->load->view('debugs', $data);
        $this->load->view('ir/financial_highlights/highlights', $data);
        $this->load->view('ir/footer', $data);
    }

    public function statements() {
        $data = array();

        $data['menu']       = 'FINANCIAL STATEMENTS';
        $data['menu_right'] = 'Company Factsheet';
        $data['menu_right_url'] = BASE_URL . 'management_discussion';
        
        $data['menu_left'] =  'Financial Highlights';
        $data['menu_left_url']  = BASE_URL . 'highlights';
        isset($this->session->annual_coverage) ? $data['menu'] = $this->session->annual_coverage : $data['menu']  = 'FINANCIAL STATEMENTS'; 
        isset($this->session->highlights) ? $data['menu_left'] = $this->session->highlights : $data['menu_left']  = 'Financial Highlights';
        isset($this->session->management_discussion) ? $data['menu_right'] = $this->session->management_discussion : $data['menu_right']  = 'MD & A'; 

        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        $this->load->view('ir/menu', $data);

        $data["statement"] = $this->financial_model->get_tb_financial_statement();
        //$this->load->view('debugs', $data);
        $this->load->view('ir/financial_highlights/statement', $data);
        $this->load->view('ir/footer', $data);
    }

    public function management_discussion() {
        $data = array();
        $data['menu']       = 'MANAGEMENT DISCUSSION AND ANALYSIS';
        $data['menu_right'] = NULL;
        $data['menu_right_url'] = NULL;
        
        $data['menu_left'] =  'Financial Statements';
        $data['menu_left_url']  = BASE_URL . 'statements';
        isset($this->session->management_discussion) ? $data['menu'] = $this->session->management_discussion : $data['menu']  = 'MANAGEMENT DISCUSSION <br> AND ANALYSIS'; 
        isset($this->session->statements) ? $data['menu_left'] = $this->session->statements : $data['menu_left']  = 'Financial Statements';

        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        $this->load->view('ir/menu', $data);

        $data["manage"] = $this->financial_model->get_tb_financial_statement();
        //$this->load->view('debugs', $data);
        $this->load->view('ir/financial_highlights/manage_analysis', $data);
        $this->load->view('ir/footer', $data);
    }

    /*public function major_shareholder() {
        $data = array();
        $data["holder"] = $this->financial_model->get_tb_major_shareholder();
        $data["holder_all"] = $this->financial_model->get_tb_major_shareholder_all();
        $this->load->view('ir/header', $data);
        //$this->load->view('debugs', $data);
        //$this->load->view('ir/menu', $data);
        $this->load->view('ir/financial_highlights/shareholder', $data);
        //$this->load->view('ir/footer', $data);
    }

    public function sharehol_meeting() {
        $data = array();
        $data["manage"] = $this->financial_model->get_tb_financial_statement();
        $this->load->view('ir/header', $data);
        //$this->load->view('debugs', $data);
        //$this->load->view('ir/menu', $data);
        $this->load->view('ir/financial_highlights/share_meeting', $data);
        //$this->load->view('ir/footer', $data);
    }

    public function dividen_policy() {
        $data = array();
        $data["policy"] = $this->financial_model->get_tb_dividen_policy();
        $this->load->view('ir/header', $data);
        //$this->load->view('debugs', $data);
        //$this->load->view('ir/menu', $data);
        $this->load->view('ir/financial_highlights/dividen_policy', $data);
        //$this->load->view('ir/footer', $data);
    }*/
}
