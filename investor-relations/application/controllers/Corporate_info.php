<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Corporate_info extends CI_Controller {

    public $menu;

    public function __construct() {
        parent::__construct();
    }

// $route['organization-chart']        = 'corporate_info/organization_chart';
    // $route['bod']                       = 'corporate_info/board_of_director';
    // $route['managementment-team']       = 'corporate_info/mangement_team';
    // $route['awards']                    = 'corporate_info/awards';

    public function blank() {

        $data = array();

        $data['menu']           = 'Company\'s History';
        $data['menu_right']     = '';
        $data['menu_right_url'] = '';
        $data['menu_left']      = '';
        $data['menu_left_url']  = '';

        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        $this->load->view('ir/menu', $data);

        // $this->load->view('ir/corporate_info/general_information', $data);
        $this->load->view('ir/footer', $data);

    }

    public function index() {
        $this->vision_mission_core_value();
    }

    public function general_information() {

        $data       = array();
        $this->menu = $this->utilities->method_to_menu($this->router->fetch_method());

        $data['menu']           = $this->menu;
        $data['menu_right']     = NULL;
        $data['menu_right_url'] = NULL;
        $data['menu_left']      = NULL;
        $data['menu_left_url']  = NULL;

        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        $this->load->view('ir/menu', $data);

        // $ci->session->set_userdata('lang', $language);
        // $ss_lang = $this->session->lang;
        // echo $ss_lang;
        // $data['ss_lang'] = $ss_lang;
        // $ci->lang->load('message', $ss_lang);

        //
        // $lang = $this->language->switch($language);
        // var_dump($lang);
        // echo $this->lang->line('corporate_info');

        // $language = $this->session->lang;
        // $language = ($language != "") ? $language : "english";
        // var_dump($language);

        $this->load->view('ir/corporate_info/general_information', $data);
        $this->load->view('ir/footer', $data);

    }

    public function vision_mission_core_value() {

        $data = array();

        $this->menu = $this->utilities->method_to_menu($this->router->fetch_method());

        $data['menu']           = $this->menu;
        $data['menu_right']     = 'Company  \'s History';
        $data['menu_right_url'] = 'company-s-history';
        $data['menu_left']      = 'General Information';
        $data['menu_left_url']  = 'general-information';

        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        $this->load->view('ir/menu', $data);

        // $ci->session->set_userdata('lang', $language);
        // $ss_lang = $this->session->lang;
        // echo $ss_lang;
        // $data['ss_lang'] = $ss_lang;
        // $ci->lang->load('message', $ss_lang);

        //
        // $lang = $this->language->switch($language);
        // var_dump($lang);
        // echo $this->lang->line('corporate_info');

        // $language = $this->session->lang;
        // $language = ($language != "") ? $language : "english";
        // var_dump($language);

        $this->load->view('ir/corporate_info/vision_mision_core_value', $data);
        $this->load->view('ir/footer', $data);

    }

    public function company_s_history() {

        $data = array();

        $this->menu = $this->utilities->method_to_menu($this->router->fetch_method());

        $data['menu']           = $this->menu;
        $data['menu_right']     = '';
        $data['menu_right_url'] = '';
        $data['menu_left']      = '';
        $data['menu_left_url']  = '';

        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        $this->load->view('ir/menu', $data);

        $this->load->view('ir/corporate_info/' . $this->router->fetch_method(), $data);
        $this->load->view('ir/footer', $data);

    }

    public function message_from_ceo_and_coo() {

        $data = array();

        $this->menu = $this->utilities->method_to_menu($this->router->fetch_method());
        $data['menu']           = $this->menu;
        $data['menu_right']     = NULL;
        $data['menu_right_url'] = NULL;
        $data['menu_left']      = NULL;
        $data['menu_left_url']  = NULL;

        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        $this->load->view('ir/menu', $data);
        $this->load->view('ir/corporate_info/' . $this->router->fetch_method(), $data);
        $this->load->view('ir/footer', $data);

    }

    public function business_overview() {

        $data = array();

        $this->menu = $this->utilities->method_to_menu($this->router->fetch_method());

        $data['menu']           = $this->menu;
        $data['menu_right']     = NULL;
        $data['menu_right_url'] = NULL;
        $data['menu_left']      = NULL;
        $data['menu_left_url']  = NULL;

        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        $this->load->view('ir/menu', $data);
        $this->load->view('ir/corporate_info/' . $this->router->fetch_method(), $data);
        $this->load->view('ir/footer', $data);

    }

    public function company_structure() {

        $data = array();

        $this->menu = $this->utilities->method_to_menu($this->router->fetch_method());
        $data['menu']           = $this->menu;
        $data['menu_right']     = NULL;
        $data['menu_right_url'] = NULL;
        $data['menu_left']      = NULL;
        $data['menu_left_url']  = NULL;

        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        $this->load->view('ir/menu', $data);
        $this->load->view('ir/corporate_info/' . $this->router->fetch_method(), $data);
        $this->load->view('ir/footer', $data);

    }

    public function organization_chart() {

        $data = array();

        $this->menu = $this->utilities->method_to_menu($this->router->fetch_method());
        $data['menu']           = $this->menu;
        $data['menu_right']     = NULL;
        $data['menu_right_url'] = NULL;
        $data['menu_left']      = NULL;
        $data['menu_left_url']  = NULL;

        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        $this->load->view('ir/menu', $data);
        $this->load->view('ir/corporate_info/' . $this->router->fetch_method(), $data);
        $this->load->view('ir/footer', $data);

    }

    public function board_of_director() {

        $data = array();

        $this->menu = $this->utilities->method_to_menu($this->router->fetch_method());
        $data['menu']           = $this->menu;
        $data['menu_right']     = NULL;
        $data['menu_right_url'] = NULL;
        $data['menu_left']      = NULL;
        $data['menu_left_url']  = NULL;

        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        $this->load->view('ir/menu', $data);
        $this->load->view('ir/corporate_info/' . $this->router->fetch_method(), $data);
        $this->load->view('ir/footer', $data);


    }

    public function management_team() {

        $data = array();

        $this->menu = $this->utilities->method_to_menu($this->router->fetch_method());
        $data['menu']           = $this->menu;
        $data['menu_right']     = NULL;
        $data['menu_right_url'] = NULL;
        $data['menu_left']      = NULL;
        $data['menu_left_url']  = NULL;

        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        $this->load->view('ir/menu', $data);
        $this->load->view('ir/corporate_info/' . $this->router->fetch_method(), $data);
        $this->load->view('ir/footer', $data);

    }

    public function awards() {

        $data = array();

        $this->menu = $this->utilities->method_to_menu($this->router->fetch_method());
        $data['menu']           = $this->menu;
        $data['menu_right']     = NULL;
        $data['menu_right_url'] = NULL;
        $data['menu_left']      = NULL;
        $data['menu_left_url']  = NULL;

        $this->load->view('ir/header', $data);
        $this->load->view('ir/navigation', $data);
        $this->load->view('ir/menu', $data);
        $this->load->view('ir/corporate_info/' . $this->router->fetch_method(), $data);
        $this->load->view('ir/footer', $data);

    }

}
