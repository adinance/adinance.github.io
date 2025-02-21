<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Shareholder_info extends CI_Controller {

    public $menu = array();
    public $data = array();

    public function __construct() {
        parent::__construct();
        $this->data['menu_id']    = 'extHeader4-hu';
        $this->data['menu_class'] = 'cid-uqep5KPOlv';
        isset($this->session->shareholder_info) ? $this->data['menu_main']       = $this->session->shareholder_info : $this->data['menu_main']       = $this->utilities->method_to_menu($this->router->fetch_class());
        $this->data['menu_right'] = NULL;
        $this->data['menu_right_url'] = NULL;
        $this->data['menu_left']      = NULL;
        $this->data['menu_left_url']  = NULL;

    }

    public function general_information() {

        isset($this->session->general_information) ? $this->data['menu']             = $this->session->general_information : $this->data['menu']             = 'Fact Sheet';
        isset($this->session->major_shareholder) ? $this->data['menu_right'] = $this->session->major_shareholder : $this->data['menu_right'] = $this->utilities->method_to_menu('major_shareholder');
        $this->data['menu_right_url']                                                = BASE_URL . $this->utilities->method_to_link('major_shareholder');
        
        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/sharehoder_info/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function major_shareholder() {

        isset($this->session->major_shareholder) ? $this->data['menu']           = $this->session->major_shareholder : $this->data['menu']           = $this->utilities->method_to_menu('major_shareholder');
        isset($this->session->shareholder_s_meeting) ? $this->data['menu_right'] = $this->session->shareholder_s_meeting : $this->data['menu_right'] = 'Shareholder\'s Meeting';
        $this->data['menu_right_url']                                            = BASE_URL . $this->utilities->method_to_link('shareholder_s_meeting');
        isset($this->session->general_information) ? $this->data['menu_left'] = $this->session->general_information : $this->data['menu_left'] = $this->utilities->method_to_menu('general_information');
        $this->data['menu_left_url']                                        = BASE_URL . $this->utilities->method_to_link('general_information');

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/sharehoder_info/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);
    }

    public function shareholder_s_meeting() {

        isset($this->session->shareholder_s_meeting) ? $this->data['menu']             = $this->session->shareholder_s_meeting : $this->data['menu']             = $this->utilities->method_to_menu('shareholder_s_meeting');
        isset($this->session->dividen_policy_and_payment) ? $this->data['menu_right']  = $this->session->dividen_policy_and_payment : $this->data['menu_right']  = $this->utilities->method_to_menu('dividen_policy_and_payment');
        $this->data['menu_right_url']                                       = BASE_URL . $this->utilities->method_to_link('dividen_policy_and_payment');
        isset($this->session->major_shareholder) ? $this->data['menu_left'] = $this->session->major_shareholder : $this->data['menu_left'] = $this->utilities->method_to_menu('major_shareholder');
        $this->data['menu_left_url']                                        = BASE_URL . $this->utilities->method_to_link('major_shareholder');

        $this->data['result'] = $this->apps->get_file_by_configuration_id(8);

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/sharehoder_info/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);
    }

    public function invitation() {

        isset($this->session->invitation) ? $this->data['menu']             = $this->session->invitation : $this->data['menu']             = $this->utilities->method_to_menu('invitation');
        isset($this->session->the_resolutions) ? $this->data['menu_right']  = $this->session->the_resolutions : $this->data['menu_right']  = $this->utilities->method_to_menu('the_resolutions');
        $this->data['menu_right_url']                                       = BASE_URL . $this->utilities->method_to_link('the_resolutions');
        isset($this->session->major_shareholder) ? $this->data['menu_left'] = $this->session->major_shareholder : $this->data['menu_left'] = $this->utilities->method_to_menu('major_shareholder');
        $this->data['menu_left_url']                                        = BASE_URL . $this->utilities->method_to_link('major_shareholder');

        $this->data['result'] = $this->apps->get_file_by_configuration_id(8);

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/sharehoder_info/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);
    }

    public function the_resolutions() {

        isset($this->session->the_resolutions) ? $this->data['menu']                             = $this->session->the_resolutions : $this->data['menu']                             = $this->utilities->method_to_menu('the_resolutions');
        isset($this->session->the_minutes_of_annual_general_meeting) ? $this->data['menu_right'] = $this->session->the_minutes_of_annual_general_meeting : $this->data['menu_right'] = $this->utilities->method_to_menu('the_minutes_of_annual_general_meeting');
        $this->data['menu_right_url']                                                            = BASE_URL . $this->utilities->method_to_link('the_minutes_of_annual_general_meeting');
        isset($this->session->invitation) ? $this->data['menu_left']                             = $this->session->invitation : $this->data['menu_left']                             = $this->utilities->method_to_menu('invitation');
        $this->data['menu_left_url']                                                             = BASE_URL . $this->utilities->method_to_link('invitation');

        $this->data['result'] = $this->apps->get_file_by_configuration_id(9);

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/sharehoder_info/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);
    }

    public function the_minutes_of_annual_general_meeting() {

        isset($this->session->the_minutes_of_annual_general_meeting) ? $this->data['menu'] = $this->session->the_minutes_of_annual_general_meeting : $this->data['menu'] = $this->utilities->method_to_menu('the_minutes_of_annual_general_meeting');
        isset($this->session->dividen_policy_and_payment) ? $this->data['menu_right']      = $this->session->dividen_policy_and_payment : $this->data['menu_right']      = 'Dividend Policy & Payment';
        $this->data['menu_right_url']                                                      = BASE_URL . $this->utilities->method_to_link('dividen_policy_and_payment');
        isset($this->session->the_resolutions) ? $this->data['menu_left']                  = $this->session->the_resolutions : $this->data['menu_left']                  = $this->utilities->method_to_menu('the_resolutions');
        $this->data['menu_left_url']                                                       = BASE_URL . $this->utilities->method_to_link('the_resolutions');

        $this->data['result'] = $this->apps->get_file_by_configuration_id(10);

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/sharehoder_info/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function dividen_policy_and_payment() {

        isset($this->session->dividen_policy_and_payment) ? $this->data['menu']                 = $this->session->dividen_policy_and_payment : $this->data['menu']                 = 'Dividend Policy & Payment';
        isset($this->session->newly_issued_ordinary_shares) ? $this->data['menu_right']         = $this->session->newly_issued_ordinary_shares : $this->data['menu_right']         = $this->utilities->method_to_menu('newly_issued_ordinary_shares');
        $this->data['menu_right_url']                                                           = BASE_URL . $this->utilities->method_to_link('newly_issued_ordinary_shares');
        isset($this->session->the_minutes_of_annual_general_meeting) ? $this->data['menu_left'] = $this->session->the_minutes_of_annual_general_meeting : $this->data['menu_left'] = $this->utilities->method_to_menu('the_resolutions');
        $this->data['menu_left_url']                                                            = BASE_URL . $this->utilities->method_to_link('the_minutes_of_annual_general_meeting');

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/sharehoder_info/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function newly_issued_ordinary_shares() {

        isset($this->session->newly_issued_ordinary_shares) ? $this->data['menu']    = $this->session->newly_issued_ordinary_shares : $this->data['menu']    = $this->utilities->method_to_menu('newly_issued_ordinary_shares');
        isset($this->session->ir_calendar) ? $this->data['menu_right']               = $this->session->ir_calendar : $this->data['menu_right']               = $this->utilities->method_to_menu('ir_calendar');
        $this->data['menu_right_url']                                                = BASE_URL . $this->utilities->method_to_link('ir_calendar');
        isset($this->session->dividen_policy_and_payment) ? $this->data['menu_left'] = $this->session->dividen_policy_and_payment : $this->data['menu_left'] = 'Dividend Policy & Payment';
        $this->data['menu_left_url']                                                 = BASE_URL . $this->utilities->method_to_link('dividen_policy_and_payment');

        $this->data['result'] = $this->apps->get_file_by_configuration_id(11);

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/sharehoder_info/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);
    }

    public function ir_calendar() {

        isset($this->session->ir_calendar) ? $this->data['menu']    = $this->session->ir_calendar : $this->data['menu']    = $this->utilities->method_to_menu('ir_calendar');
        $this->data['menu_right']               = NULL;
        $this->data['menu_right_url']                                                = NULL;
        isset($this->session->newly_issued_ordinary_shares) ? $this->data['menu_left'] = $this->session->newly_issued_ordinary_shares : $this->data['menu_left'] = $this->utilities->method_to_menu('newly_issued_ordinary_shares');
        $this->data['menu_left_url']                                                 = BASE_URL . $this->utilities->method_to_link('newly_issued_ordinary_shares');


        $this->data['result'] = $this->apps->get_ir_calendar();

        // echo '<pre>';
        // var_dump($this->data['result']); exit;

        // $this->load->view('ir/header', $this->data);
        // $this->load->view('ir/navigation', $this->data);
        // $this->load->view('ir/menu', $this->data);
        // $this->load->view('ir/financial_information/ir_calendar', $this->data);
        // $this->load->view('ir/footer', $this->data);

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/sharehoder_info/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

}
