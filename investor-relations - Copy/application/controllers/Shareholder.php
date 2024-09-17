<?php defined('BASEPATH') OR exit('No direct script access allowed');

// require_once('libraries/Utilities.php');

class Shareholder extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('shareholder_model');
    }

    public function major_shareholder() {
        $data = array();
        $data['menu']       = 'MAJOR SHAREHOLDER';
        $data['menu_left'] = NULL;
        $data['menu_left_url'] = NULL;
        
        $data['menu_right'] =  'shareholder Meeting';
        $data['menu_right_url']  = BASE_URL . 'sharehol_invitation';
        isset($this->session->major_shareholder) ? $data['menu'] = $this->session->major_shareholder : $data['menu']  = 'MAJOR SHAREHOLDER'; 
        isset($this->session->sharehol_meeting) ? $data['menu_right'] = $this->session->sharehol_meeting : $data['menu_right']  = 'Shareholder\'s Meeting';

        $data["holder"] = $this->shareholder_model->get_tb_major_shareholder();
        $data["holder_all"] = $this->shareholder_model->get_tb_major_shareholder_all();
        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        //$this->load->view('debugs', $data); 
        $this->load->view('ir/menu', $data);
        $this->load->view('ir/sharehoder_info/shareholder', $data);
        $this->load->view('ir/footer', $data);
    }

    public function invitation() {
        $data = array();
        $data['menu']       = 'SHAREHOLDER\'S MEETING';
        $data['menu_left'] = 'Major Shareholder';
        $data['menu_left_url'] = BASE_URL . 'major_shareholder';
        
        $data['menu_right'] =  'Shareholder\'s Meeting';
        $data['menu_right_url']  = BASE_URL . 'dividen_policy';
        isset($this->session->major_shareholder) ? $data['menu'] = $this->session->major_shareholder : $data['menu']  = 'SHAREHOLDER\'S MEETING';
        isset($this->session->sharehol_meeting) ? $data['menu_left'] = $this->session->sharehol_meeting : $data['menu_left']  = 'Major Shareholder';
        isset($this->session->dividen_policy) ? $data['menu_right'] = $this->session->dividen_policy : $data['menu_right']  = 'Dividend Policy & Payment';

        $data["invitation"] = $this->shareholder_model->get_tb_invitation();
        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        //$this->load->view('debugs', $data);
        $this->load->view('ir/menu', $data);
        $this->load->view('ir/sharehoder_info/invitation', $data);
        $this->load->view('ir/footer', $data);
    }

    public function resolutions() {
        $data = array();
        $data['menu']       = 'SHAREHOLDER\'S MEETING';
        $data['menu_left'] = 'Major Shareholder';
        $data['menu_left_url'] = BASE_URL . 'major_shareholder';
        
        $data['menu_right'] =  'Shareholder\'s Meeting';
        $data['menu_right_url']  = BASE_URL . 'dividen_policy';
        isset($this->session->major_shareholder) ? $data['menu'] = $this->session->major_shareholder : $data['menu']  = 'SHAREHOLDER\'S MEETING';
        isset($this->session->sharehol_meeting) ? $data['menu_left'] = $this->session->sharehol_meeting : $data['menu_left']  = 'Major Shareholder';
        isset($this->session->dividen_policy) ? $data['menu_right'] = $this->session->dividen_policy : $data['menu_right']  = 'Dividend Policy & Payment';

        $data["invitation"] = $this->shareholder_model->get_tb_resolutions();
        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        //$this->load->view('debugs', $data);
        $this->load->view('ir/menu', $data);
        $this->load->view('ir/sharehoder_info/resolution', $data);
        $this->load->view('ir/footer', $data);
    }

    public function the_minutes_of_annaul_general_meeting() {
        $data = array();
        $data['menu']       = 'SHAREHOLDER\'S MEETING';
        $data['menu_left'] = 'Major Shareholder';
        $data['menu_left_url'] = BASE_URL . 'major_shareholder';
        
        $data['menu_right'] =  'Shareholder\'s Meeting';
        $data['menu_right_url']  = BASE_URL . 'dividen_policy';
        isset($this->session->major_shareholder) ? $data['menu'] = $this->session->major_shareholder : $data['menu']  = 'SHAREHOLDER\'S MEETING';
        isset($this->session->sharehol_meeting) ? $data['menu_left'] = $this->session->sharehol_meeting : $data['menu_left']  = 'Major Shareholder';
        isset($this->session->dividen_policy) ? $data['menu_right'] = $this->session->dividen_policy : $data['menu_right']  = 'Dividend Policy & Payment';

        $data["invitation"] = $this->shareholder_model->get_tb_minute_annaul_general();
        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        //$this->load->view('debugs', $data);
        $this->load->view('ir/menu', $data);
        $this->load->view('ir/sharehoder_info/the_minutes_of_annaul_general_meeting', $data);
        $this->load->view('ir/footer', $data);
    }

    public function dividen_policy() {
        $data = array();
        $data['menu']      = 'DIVIDEN POLICY AND PAYMENT';
        $data['menu_right'] = 'Newly Issue Ordinary';
        $data['menu_right_url'] = 'newly_issued_ordinary_shares';
        
        $data['menu_left'] =  'Shareholder\'s Meeting';
        $data['menu_left_url']  = BASE_URL . 'invitation';
        isset($this->session->dividen_policy) ? $data['menu'] = $this->session->dividen_policy : $data['menu']  = 'DIVIDEN POLICY <br>AND PAYMENT'; 
        isset($this->session->sharehol_meeting) ? $data['menu_left'] = $this->session->sharehol_meeting : $data['menu_left']  = 'Shareholder\'s Meeting';
        isset($this->session->newly_issued_ordinary_shares) ? $data['menu_right'] = $this->session->newly_issued_ordinary_shares : $data['menu_right']  = 'Newly Issue Ordinary';

        $data["policy"] = $this->shareholder_model->get_tb_dividen_policy();
        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        //$this->load->view('debugs', $data);
        $this->load->view('ir/menu', $data);
        $this->load->view('ir/sharehoder_info/dividen_policy', $data);
        $this->load->view('ir/footer', $data);
    }

    public function newly_issued_ordinary_shares() {
        $data = array();
        $data['menu']      = 'NEWLY ISSUED ORDINARY SHARES';
        $data['menu_right'] = NULL;
        $data['menu_right_url'] = NULL;
        
        $data['menu_left'] =  'Dividend Policy & Payment';
        $data['menu_left_url']  = BASE_URL . 'dividen_policy';
        isset($this->session->newly_issued_ordinary_shares) ? $data['menu'] = $this->session->newly_issued_ordinary_shares : $data['menu']  = 'NEWLY ISSUED<br>ORDINARY SHARES'; 
        isset($this->session->dividen_policy) ? $data['menu_left'] = $this->session->dividen_policy : $data['menu_left']  = 'Dividend Policy & Payment';

        $data["policy"] = $this->shareholder_model->get_tb_dividen_policy();
        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        //$this->load->view('debugs', $data);
        $this->load->view('ir/menu', $data);
        $this->load->view('ir/sharehoder_info/newly_issued', $data);
        $this->load->view('ir/footer', $data);
    }
}
