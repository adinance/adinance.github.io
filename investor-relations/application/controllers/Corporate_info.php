<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Corporate_info extends CI_Controller {

    public $menu = array();
    public $data = array();

    public function __construct() {
        parent::__construct();
        $this->menu['id']    = 'extHeader4-hs';
        $this->menu['class'] = 'cid-uqdU5tPdTp';
    }

    public function general_information() {

        $this->data['menu_id']    = $this->menu['id'];
        $this->data['menu_class'] = $this->menu['class'];

        isset($this->session->corporate_info) ? $this->data['menu_main']            = $this->session->corporate_info : $this->data['menu_main']            = $this->utilities->method_to_menu($this->router->fetch_class());
        isset($this->session->general_information) ? $this->data['menu']            = $this->session->general_information : $this->data['menu']            = $this->utilities->method_to_menu($this->router->fetch_method());
        isset($this->session->vision_mission_core_value) ? $this->data['menu_right'] = $this->session->vision_mission_core_value : $this->data['menu_right'] = 'Vision • Mision • Core Value';
        $this->data['menu_right_url']                                               = BASE_URL . 'vision-mission-core-value';
        $this->data['menu_left']                                                    = '';
        $this->data['menu_left_url']                                                = NULL;

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);

        // $ci->session->set_userdata('lang', $language);
        // $ss_lang = $this->session->lang;
        // echo $ss_lang;
        // $this->data['ss_lang'] = $ss_lang;
        // $ci->lang->load('message', $ss_lang);

        //
        // $lang = $this->language->switch($language);
        // var_dump($lang);
        // echo $this->lang->line('corporate_info');

        // $language = $this->session->lang;
        // $language = ($language != "") ? $language : "english";
        // var_dump($language);

        $this->load->view('ir/corporate_info/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function vision_mission_core_value() {

        $this->data['menu_id']    = $this->menu['id'];
        $this->data['menu_class'] = $this->menu['class'];

        isset($this->session->corporate_info) ? $this->data['menu_main']       = $this->session->corporate_info : $this->data['menu_main']       = $this->utilities->method_to_menu($this->router->fetch_class());
        isset($this->session->vision_mission_core_value) ? $this->data['menu'] = $this->session->vision_mission_core_value : $this->data['menu'] = 'Vision • Mision • Core Value';
        isset($this->session->company_s_history) ? $this->data['menu_right']   = $this->session->company_s_history : $this->data['menu_right']   = 'Company \'s History';
        $this->data['menu_right_url']                                          = BASE_URL . 'company-s-history';
        isset($this->session->general_information) ? $this->data['menu_left']  = $this->session->general_information : $this->data['menu_left']  = 'General Information';
        $this->data['menu_left_url']                                           = 'general-information';

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/corporate_info/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function company_s_history() {

        $this->data['menu_id']    = $this->menu['id'];
        $this->data['menu_class'] = $this->menu['class'];

        isset($this->session->corporate_info) ? $this->data['menu_main']            = $this->session->corporate_info : $this->data['menu_main']            = $this->utilities->method_to_menu($this->router->fetch_class());
        isset($this->session->company_s_history) ? $this->data['menu']              = $this->session->company_s_history : $this->data['menu']              = 'Company \'s History';
        isset($this->session->business_overview) ? $this->data['menu_right']        = $this->session->business_overview : $this->data['menu_right']        = $this->utilities->method_to_menu('business_overview');
        $this->data['menu_right_url']                                               = BASE_URL . $this->utilities->method_to_link('business_overview');
        isset($this->session->vision_mission_core_value) ? $this->data['menu_left'] = $this->session->vision_mission_core_value : $this->data['menu_left'] = $this->utilities->method_to_menu('vision_mission_core_value');
        $this->data['menu_left_url']                                                = BASE_URL . $this->utilities->method_to_link('vision_mission_core_value');

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/corporate_info/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function business_overview() {

        $this->data['menu_id']    = $this->menu['id'];
        $this->data['menu_class'] = $this->menu['class'];

        isset($this->session->corporate_info) ? $this->data['menu_main']            = $this->session->corporate_info : $this->data['menu_main']            = $this->utilities->method_to_menu($this->router->fetch_class());
        isset($this->session->business_overview) ? $this->data['menu']              = $this->session->business_overview : $this->data['menu']              = $this->utilities->method_to_menu('business_overview');
        isset($this->session->message_from_ceo_and_coo) ? $this->data['menu_right'] = $this->session->message_from_ceo_and_coo : $this->data['menu_right'] = 'Message from CEO & COO';
        $this->data['menu_right_url']                                               = BASE_URL . $this->utilities->method_to_link('message_from_ceo_and_coo');
        isset($this->session->company_s_history) ? $this->data['menu_left']         = $this->session->company_s_history : $this->data['menu_left']         = 'Company \'s History';
        $this->data['menu_left_url']                                                = BASE_URL . $this->utilities->method_to_link('company_s_history');

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/corporate_info/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function message_from_ceo_and_coo() {

        $this->data['menu_id']    = $this->menu['id'];
        $this->data['menu_class'] = $this->menu['class'];

        isset($this->session->corporate_info) ? $this->data['menu_main']      = $this->session->corporate_info : $this->data['menu_main']      = $this->utilities->method_to_menu($this->router->fetch_class());
        isset($this->session->message_from_ceo_and_coo) ? $this->data['menu'] = $this->session->message_from_ceo_and_coo : $this->data['menu'] = 'Message from CEO & COO';
        isset($this->session->company_structure) ? $this->data['menu_right']  = $this->session->company_structure : $this->data['menu_right']  = $this->utilities->method_to_menu('company_structure');
        $this->data['menu_right_url']                                         = BASE_URL . $this->utilities->method_to_link('company_structure');
        isset($this->session->business_overview) ? $this->data['menu_left']   = $this->session->business_overview : $this->data['menu_left']   = $this->utilities->method_to_menu('business_overview');
        $this->data['menu_left_url']                                          = BASE_URL . $this->utilities->method_to_link('business_overview');

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/corporate_info/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function company_structure() {

        $this->data['menu_id']    = $this->menu['id'];
        $this->data['menu_class'] = $this->menu['class'];

        isset($this->session->corporate_info) ? $this->data['menu_main']           = $this->session->corporate_info : $this->data['menu_main']           = $this->utilities->method_to_menu($this->router->fetch_class());
        isset($this->session->company_structure) ? $this->data['menu']             = $this->session->company_structure : $this->data['menu']             = $this->utilities->method_to_menu('company_structure');
        isset($this->session->organization_chart) ? $this->data['menu_right']      = $this->session->organization_chart : $this->data['menu_right']      = $this->utilities->method_to_menu('organization_chart');
        $this->data['menu_right_url']                                              = BASE_URL . $this->utilities->method_to_link('organization_chart');
        isset($this->session->message_from_ceo_and_coo) ? $this->data['menu_left'] = $this->session->message_from_ceo_and_coo : $this->data['menu_left'] = $this->utilities->method_to_menu('message_from_ceo_and_coo');
        $this->data['menu_left_url']                                               = BASE_URL . $this->utilities->method_to_link('message_from_ceo_and_coo');

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/corporate_info/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);
    }

    public function organization_chart() {

        $this->data['menu_id']    = $this->menu['id'];
        $this->data['menu_class'] = $this->menu['class'];

        isset($this->session->corporate_info) ? $this->data['menu_main']     = $this->session->corporate_info : $this->data['menu_main']     = $this->utilities->method_to_menu($this->router->fetch_class());
        isset($this->session->organization_chart) ? $this->data['menu']      = $this->session->organization_chart : $this->data['menu']      = $this->utilities->method_to_menu('organization_chart');
        isset($this->session->board_of_director) ? $this->data['menu_right'] = $this->session->board_of_director : $this->data['menu_right'] = $this->utilities->method_to_menu('board_of_director');
        $this->data['menu_right_url']                                        = BASE_URL . $this->utilities->method_to_link('board_of_director');
        isset($this->session->company_structure) ? $this->data['menu_left']  = $this->session->company_structure : $this->data['menu_left']  = $this->utilities->method_to_menu('company_structure');
        $this->data['menu_left_url']                                         = BASE_URL . $this->utilities->method_to_link('company_structure');

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/corporate_info/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function board_of_director() {

        $this->data['menu_id']    = $this->menu['id'];
        $this->data['menu_class'] = $this->menu['class'];

        isset($this->session->corporate_info) ? $this->data['menu_main']     = $this->session->corporate_info : $this->data['menu_main']     = $this->utilities->method_to_menu($this->router->fetch_class());
        isset($this->session->board_of_director) ? $this->data['menu']       = $this->session->board_of_director : $this->data['menu']       = $this->utilities->method_to_menu('board_of_director');
        isset($this->session->management_team) ? $this->data['menu_right']   = $this->session->management_team : $this->data['menu_right']   = $this->utilities->method_to_menu('management_team');
        $this->data['menu_right_url']                                        = BASE_URL . $this->utilities->method_to_link('management_team');
        isset($this->session->organization_chart) ? $this->data['menu_left'] = $this->session->organization_chart : $this->data['menu_left'] = $this->utilities->method_to_menu('organization_chart');
        $this->data['menu_left_url']                                         = BASE_URL . $this->utilities->method_to_link('organization_chart');

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/corporate_info/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function management_team() {

        $this->data['menu_id']    = $this->menu['id'];
        $this->data['menu_class'] = $this->menu['class'];

        isset($this->session->corporate_info) ? $this->data['menu_main']    = $this->session->corporate_info : $this->data['menu_main']    = $this->utilities->method_to_menu($this->router->fetch_class());
        isset($this->session->management_team) ? $this->data['menu']        = $this->session->management_team : $this->data['menu']        = $this->utilities->method_to_menu('management_team');
        isset($this->session->awards) ? $this->data['menu_right']           = $this->session->awards : $this->data['menu_right']           = $this->utilities->method_to_menu('awards');
        $this->data['menu_right_url']                                       = BASE_URL . $this->utilities->method_to_link('awards');
        isset($this->session->board_of_director) ? $this->data['menu_left'] = $this->session->board_of_director : $this->data['menu_left'] = $this->utilities->method_to_menu('board_of_director');
        $this->data['menu_left_url']                                        = BASE_URL . $this->utilities->method_to_link('board_of_director');

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/corporate_info/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function awards() {

        $this->data['menu_id']    = $this->menu['id'];
        $this->data['menu_class'] = $this->menu['class'];

        isset($this->session->corporate_info) ? $this->data['menu_main']  = $this->session->corporate_info : $this->data['menu_main']  = $this->utilities->method_to_menu($this->router->fetch_class());
        isset($this->session->awards) ? $this->data['menu']               = $this->session->awards : $this->data['menu']               = $this->utilities->method_to_menu('awards');
        $this->data['menu_right']                                         = NULL;
        $this->data['menu_right_url']                                     = NULL;
        isset($this->session->management_team) ? $this->data['menu_left'] = $this->session->management_team : $this->data['menu_left'] = $this->utilities->method_to_menu('board_of_dirmanagement_teamector');
        $this->data['menu_left_url']                                      = BASE_URL . $this->utilities->method_to_link('management_team');

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/corporate_info/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

}
