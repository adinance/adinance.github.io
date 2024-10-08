<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Financial_information extends CI_Controller {

    public $menu = array();
    public $data = array();

    public function __construct() {
        parent::__construct();
        $this->menu['id']    = 'extHeader4-hv';
        $this->menu['class'] = 'cid-uqepzvNfqK';
    }

    public function financial_highlight() {

        $this->data['menu_id']    = $this->menu['id'];
        $this->data['menu_class'] = $this->menu['class'];

        isset($this->session->financial_info) ? $this->data['menu_main']       = $this->session->financial_info : $this->data['menu_main']       = $this->utilities->method_to_menu($this->router->fetch_class());
        isset($this->session->financial_highlight) ? $this->data['menu']       = $this->session->financial_highlight : $this->data['menu']       = $this->utilities->method_to_menu('financial_highlight');
        isset($this->session->financial_statement) ? $this->data['menu_right'] = $this->session->financial_statement : $this->data['menu_right'] = 'Financial Statements';
        $this->data['menu_right_url']                                          = BASE_URL . $this->utilities->method_to_link('financial_statement');
        $this->data['menu_left']                                               = '';
        $this->data['menu_left_url']                                           = NULL;

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/financial_info/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function financial_statement() {

        $this->data['menu_id']    = $this->menu['id'];
        $this->data['menu_class'] = $this->menu['class'];

        isset($this->session->financial_info) ? $this->data['menu_main']      = $this->session->financial_info : $this->data['menu_main']      = $this->utilities->method_to_menu($this->router->fetch_class());
        isset($this->session->financial_statement) ? $this->data['menu']      = $this->session->financial_statement : $this->data['menu']      = $this->utilities->method_to_menu('financial_statement');
        isset($this->session->md_and_a) ? $this->data['menu_right']           = $this->session->md_and_a : $this->data['menu_right']           = $this->utilities->method_to_menu('management_discussion_and_analysis');
        $this->data['menu_right_url']                                         = BASE_URL . $this->utilities->method_to_link('management_discussion_and_analysis');
        isset($this->session->financial_highlight) ? $this->data['menu_left'] = $this->session->financial_highlight : $this->data['menu_left'] = $this->utilities->method_to_menu('financial_highlight');
        $this->data['menu_left_url']                                          = BASE_URL . $this->utilities->method_to_link('financial_highlight');

        $this->data['result']['year'] = $this->apps->get_year_by_configuration_id(1);

        $result = array();

        foreach ($this->data['result']['year'] as $y) {
            if ($this->session->userdata('lang') == 'thai') {
                $row = $this->apps->get_file_by_year_quater_configuration_id($y->year, 'q4', 1);
                if (isset($row)) {
                    $result[$y->year]['Q4']['title'] = $row->title_th;
                    $result[$y->year]['Q4']['file']  = $row->file_th;
                } else {
                    $result[$y->year]['Q4']['title'] = '';
                    $result[$y->year]['Q4']['file']  = '';
                }

                $row = $this->apps->get_file_by_year_quater_configuration_id($y->year, 'q3', 1);
                if (isset($row)) {
                    $result[$y->year]['Q3']['title'] = $row->title_th;
                    $result[$y->year]['Q3']['file']  = $row->file_en;
                } else {
                    $result[$y->year]['Q3']['title'] = '';
                    $result[$y->year]['Q3']['file']  = '';
                }

                $row = $this->apps->get_file_by_year_quater_configuration_id($y->year, 'q2', 1);
                if (isset($row)) {
                    $result[$y->year]['Q2']['title'] = $row->title_th;
                    $result[$y->year]['Q2']['file']  = $row->file_th;
                } else {
                    $result[$y->year]['Q2']['title'] = '';
                    $result[$y->year]['Q2']['file']  = '';
                }

                $row = $this->apps->get_file_by_year_quater_configuration_id($y->year, 'q1', 1);
                if (isset($row)) {
                    $result[$y->year]['Q1']['title'] = $row->title_th;
                    $result[$y->year]['Q1']['file']  = $row->file_th;
                } else {
                    $result[$y->year]['Q2']['title'] = '';
                    $result[$y->year]['Q1']['file']  = '';
                }
            } else {
                $row = $this->apps->get_file_by_year_quater_configuration_id($y->year, 'q4', 1);
                if (isset($row)) {
                    $result[$y->year]['Q4']['title'] = $row->title_en;
                    $result[$y->year]['Q4']['file']  = $row->file_en;
                } else {
                    $result[$y->year]['Q4']['title'] = '';
                    $result[$y->year]['Q4']['file']  = '';
                }

                $row = $this->apps->get_file_by_year_quater_configuration_id($y->year, 'q3', 1);
                if (isset($row)) {
                    $result[$y->year]['Q3']['title'] = $row->title_en;
                    $result[$y->year]['Q3']['file']  = $row->file_en;
                } else {
                    $result[$y->year]['Q3']['title'] = '';
                    $result[$y->year]['Q3']['file']  = '';
                }

                $row = $this->apps->get_file_by_year_quater_configuration_id($y->year, 'q2', 1);
                if (isset($row)) {
                    $result[$y->year]['Q2']['title'] = $row->title_en;
                    $result[$y->year]['Q2']['file']  = $row->file_en;
                } else {
                    $result[$y->year]['Q2']['title'] = '';
                    $result[$y->year]['Q2']['file']  = '';
                }

                $row = $this->apps->get_file_by_year_quater_configuration_id($y->year, 'q1', 1);
                if (isset($row)) {
                    $result[$y->year]['Q1']['title'] = $row->title_en;
                    $result[$y->year]['Q1']['file']  = $row->file_en;
                } else {
                    $result[$y->year]['Q2']['title'] = '';
                    $result[$y->year]['Q1']['file']  = '';
                }

            }

        }

        $this->data['result']['record'] = $result;

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/financial_info/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function management_discussion_and_analysis() {

        $this->data['menu_id']    = $this->menu['id'];
        $this->data['menu_class'] = $this->menu['class'];

        isset($this->session->financial_info) ? $this->data['menu_main']                = $this->session->financial_info : $this->data['menu_main']                = $this->utilities->method_to_menu($this->router->fetch_class());
        isset($this->session->management_discussion_and_analysis) ? $this->data['menu'] = $this->session->management_discussion_and_analysis : $this->data['menu'] = $this->utilities->method_to_menu('management_discussion_and_analysis');
        isset($this->session->form_56_1) ? $this->data['menu_right']                    = $this->session->form_56_1 : $this->data['menu_right']                    = $this->utilities->method_to_menu('form_56_1');
        $this->data['menu_right_url']                                                   = BASE_URL . $this->utilities->method_to_link('form_56_1');
        isset($this->session->financial_statement) ? $this->data['menu_left']           = $this->session->financial_statement : $this->data['menu_left']           = $this->utilities->method_to_menu('financial_statement');
        $this->data['menu_left_url']                                                    = BASE_URL . $this->utilities->method_to_link('financial_statement');

        $configuration_id             = 2;
        $this->data['result']['year'] = $this->apps->get_year_by_configuration_id($configuration_id);

        $result = array();

        foreach ($this->data['result']['year'] as $y) {
            if ($this->session->userdata('lang') == 'thai') {
                $row = $this->apps->get_file_by_year_quater_configuration_id($y->year, 'q4', $configuration_id);
                if (isset($row)) {
                    $result[$y->year]['Q4']['title'] = $row->title_th;
                    $result[$y->year]['Q4']['file']  = $row->file_th;
                } else {
                    $result[$y->year]['Q4']['title'] = '';
                    $result[$y->year]['Q4']['file']  = '';
                }

                $row = $this->apps->get_file_by_year_quater_configuration_id($y->year, 'q3', $configuration_id);
                if (isset($row)) {
                    $result[$y->year]['Q3']['title'] = $row->title_th;
                    $result[$y->year]['Q3']['file']  = $row->file_en;
                } else {
                    $result[$y->year]['Q3']['title'] = '';
                    $result[$y->year]['Q3']['file']  = '';
                }

                $row = $this->apps->get_file_by_year_quater_configuration_id($y->year, 'q2', $configuration_id);
                if (isset($row)) {
                    $result[$y->year]['Q2']['title'] = $row->title_th;
                    $result[$y->year]['Q2']['file']  = $row->file_th;
                } else {
                    $result[$y->year]['Q2']['title'] = '';
                    $result[$y->year]['Q2']['file']  = '';
                }

                $row = $this->apps->get_file_by_year_quater_configuration_id($y->year, 'q1', $configuration_id);
                if (isset($row)) {
                    $result[$y->year]['Q1']['title'] = $row->title_th;
                    $result[$y->year]['Q1']['file']  = $row->file_th;
                } else {
                    $result[$y->year]['Q2']['title'] = '';
                    $result[$y->year]['Q1']['file']  = '';
                }
            } else {
                $row = $this->apps->get_file_by_year_quater_configuration_id($y->year, 'q4', $configuration_id);
                if (isset($row)) {
                    $result[$y->year]['Q4']['title'] = $row->title_en;
                    $result[$y->year]['Q4']['file']  = $row->file_en;
                } else {
                    $result[$y->year]['Q4']['title'] = '';
                    $result[$y->year]['Q4']['file']  = '';
                }

                $row = $this->apps->get_file_by_year_quater_configuration_id($y->year, 'q3', $configuration_id);
                if (isset($row)) {
                    $result[$y->year]['Q3']['title'] = $row->title_en;
                    $result[$y->year]['Q3']['file']  = $row->file_en;
                } else {
                    $result[$y->year]['Q3']['title'] = '';
                    $result[$y->year]['Q3']['file']  = '';
                }

                $row = $this->apps->get_file_by_year_quater_configuration_id($y->year, 'q2', $configuration_id);
                if (isset($row)) {
                    $result[$y->year]['Q2']['title'] = $row->title_en;
                    $result[$y->year]['Q2']['file']  = $row->file_en;
                } else {
                    $result[$y->year]['Q2']['title'] = '';
                    $result[$y->year]['Q2']['file']  = '';
                }

                $row = $this->apps->get_file_by_year_quater_configuration_id($y->year, 'q1', $configuration_id);
                if (isset($row)) {
                    $result[$y->year]['Q1']['title'] = $row->title_en;
                    $result[$y->year]['Q1']['file']  = $row->file_en;
                } else {
                    $result[$y->year]['Q2']['title'] = '';
                    $result[$y->year]['Q1']['file']  = '';
                }

            }

        }

        $this->data['result']['record'] = $result;

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/financial_info/' . $this->router->fetch_method(), $this->data);
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
