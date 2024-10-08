<?php defined('BASEPATH') OR exit('No direct script access allowed');

// require_once('libraries/Utilities.php');

class Financial extends CI_Controller {

    public $menu;
    public $this->data;

    public function __construct() {
        parent::__construct();
        $this->data = array();
        $this->menu = $this->utilities->method_to_menu($this->router->fetch_method());
        
        $this->load->model('financial_model');
    }

    public function highlights() {

        $this->data['menu']       = 'FINANCIAL HIGHLIGHTS';
        $this->data['menu_right'] = 'Financial Statements';
        $this->data['menu_right_url'] = BASE_URL . 'statements';
        
        $this->data['menu_left'] =  NULL;
        $this->data['menu_left_url']  = NULL;
        isset($this->session->annual_coverage) ? $this->data['menu'] = $this->session->annual_coverage : $this->data['menu']  = 'FINANCIAL HIGHLIGHTS'; 
        isset($this->session->statements) ? $this->data['menu_right'] = $this->session->statements : $this->data['menu_right']  = 'Financial Statements'; 

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        //$this->load->view('debugs', $this->data);
        $this->load->view('ir/financial_highlights/highlights', $this->data);
        $this->load->view('ir/footer', $this->data);
    }

    public function statements() {

        $this->data['menu']       = 'FINANCIAL STATEMENTS';
        $this->data['menu_right'] = 'Company Factsheet';
        $this->data['menu_right_url'] = BASE_URL . 'management_discussion';
        
        $this->data['menu_left'] =  'Financial Highlights';
        $this->data['menu_left_url']  = BASE_URL . 'highlights';
        isset($this->session->annual_coverage) ? $this->data['menu'] = $this->session->annual_coverage : $this->data['menu']  = 'FINANCIAL STATEMENTS'; 
        isset($this->session->highlights) ? $this->data['menu_left'] = $this->session->highlights : $this->data['menu_left']  = 'Financial Highlights';
        isset($this->session->management_discussion) ? $this->data['menu_right'] = $this->session->management_discussion : $this->data['menu_right']  = 'MD & A'; 

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);

        $this->data["statement"] = $this->financial_model->get_tb_financial_statement();
        //$this->load->view('debugs', $this->data);
        $this->load->view('ir/financial_highlights/statement', $this->data);
        $this->load->view('ir/footer', $this->data);
    }

    public function management_discussion() {
        
        $this->data['menu']       = 'MANAGEMENT DISCUSSION AND ANALYSIS';
        $this->data['menu_right'] = NULL;
        $this->data['menu_right_url'] = NULL;
        
        $this->data['menu_left'] =  'Financial Statements';
        $this->data['menu_left_url']  = BASE_URL . 'statements';
        isset($this->session->management_discussion) ? $this->data['menu'] = $this->session->management_discussion : $this->data['menu']  = 'MANAGEMENT DISCUSSION <br> AND ANALYSIS'; 
        isset($this->session->statements) ? $this->data['menu_left'] = $this->session->statements : $this->data['menu_left']  = 'Financial Statements';

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);

        $this->data["manage"] = $this->financial_model->get_tb_financial_statement();
        //$this->load->view('debugs', $this->data);
        $this->load->view('ir/financial_highlights/manage_analysis', $this->data);
        $this->load->view('ir/footer', $this->data);
    }

    /*public function major_shareholder() {
        $this->data = array();
        $this->data["holder"] = $this->financial_model->get_tb_major_shareholder();
        $this->data["holder_all"] = $this->financial_model->get_tb_major_shareholder_all();
        $this->load->view('ir/header', $this->data);
        //$this->load->view('debugs', $this->data);
        //$this->load->view('ir/menu', $this->data);
        $this->load->view('ir/financial_highlights/shareholder', $this->data);
        //$this->load->view('ir/footer', $this->data);
    }

    public function sharehol_meeting() {
        $this->data = array();
        $this->data["manage"] = $this->financial_model->get_tb_financial_statement();
        $this->load->view('ir/header', $this->data);
        //$this->load->view('debugs', $this->data);
        //$this->load->view('ir/menu', $this->data);
        $this->load->view('ir/financial_highlights/share_meeting', $this->data);
        //$this->load->view('ir/footer', $this->data);
    }

    public function dividen_policy() {
        $this->data = array();
        $this->data["policy"] = $this->financial_model->get_tb_dividen_policy();
        $this->load->view('ir/header', $this->data);
        //$this->load->view('debugs', $this->data);
        //$this->load->view('ir/menu', $this->data);
        $this->load->view('ir/financial_highlights/dividen_policy', $this->data);
        //$this->load->view('ir/footer', $this->data);
    }*/
}
