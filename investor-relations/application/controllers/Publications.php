<?php defined('BASEPATH') OR exit('No direct script access allowed');

// require_once('libraries/Utilities.php');

class Publications extends CI_Controller {

    public $menu = array();
    public $data = array();

    public function __construct() {
        parent::__construct();
        $this->menu['id']    = 'extHeader4-hx';
        $this->menu['class'] = 'cid-uqv79q2GIW';
    }

    public function annual_report() {

        $this->data['menu_id']                                                        = $this->menu['id'];
        $this->data['menu_class']                                                     = $this->menu['class'];
        isset($this->session->publications) ? $this->data['menu_main']                = $this->session->publications : $this->data['menu_main']                = $this->utilities->method_to_menu($this->router->fetch_class());
        isset($this->session->annual_report) ? $this->data['menu']                    = $this->session->annual_report : $this->data['menu']                    = 'Annual Report / Form 56-1 One Report ';
        isset($this->session->presentations_and_webcasts) ? $this->data['menu_right'] = $this->session->presentations_and_webcasts : $this->data['menu_right'] = $this->utilities->method_to_menu('presentations_and_webcasts');
        $this->data['menu_right_url']                                                 = BASE_URL . $this->utilities->method_to_link('presentations_and_webcasts');
        $this->data['menu_left']                                                      = '';
        $this->data['menu_left_url']                                                  = NULL;

        $this->data['result'] = $this->apps->get_annual_report_list_by_configuration_id(4);

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/publications/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function presentations_and_webcasts() {

        $this->data['menu_id']                                                  = $this->menu['id'];
        $this->data['menu_class']                                               = $this->menu['class'];
        isset($this->session->publications) ? $this->data['menu_main']          = $this->session->publications : $this->data['menu_main']          = $this->utilities->method_to_menu($this->router->fetch_class());
        isset($this->session->presentations_and_webcasts) ? $this->data['menu'] = $this->session->presentations_and_webcasts : $this->data['menu'] = $this->utilities->method_to_menu('presentations_and_webcasts');
        $this->data['menu_right']                                               = NULL;
        $this->data['menu_right_url']                                           = NULL;
        isset($this->session->annual_report) ? $this->data['menu_left']         = $this->session->annual_report : $this->data['menu_left']         = 'Annual Report / Form 56-1 One Report ';
        $this->data['menu_left_url']                                            = BASE_URL . $this->utilities->method_to_link('annual_report');

        $this->data['result'] = $this->apps->get_file_by_configuration_id(4);

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/publications/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);
    }

    public function form_56_1() {

        $this->data['menu_id']    = $this->menu['id'];
        $this->data['menu_class'] = $this->menu['class'];

        isset($this->session->financial_info) ? $this->data['menu_main']                = $this->session->financial_info : $this->data['menu_main']                = $this->utilities->method_to_menu($this->router->fetch_class());
        isset($this->session->form_56_1) ? $this->data['menu'] = $this->session->form_56_1 : $this->data['menu'] = $this->utilities->method_to_menu('form_56_1');
        $this->data['menu_right']                                  = NULL;
        $this->data['menu_right_url']                              = NULL;
        isset($this->session->md_and_a) ? $this->data['menu_left']           = $this->session->md_and_a : $this->data['menu_left']           = $this->utilities->method_to_menu('management_discussion_and_analysis');
        $this->data['menu_left_url']                                                    = BASE_URL . $this->utilities->method_to_link('financial_statement');

        $this->data['result'] = $this->apps->get_file_by_configuration_id(3);

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/financial_info/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

}
