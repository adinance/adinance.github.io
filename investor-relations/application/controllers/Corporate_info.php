<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Corporate_info extends CI_Controller {

    public $menu = array();
    public $data = array();

    public function __construct() {
        parent::__construct();
        $this->data['menu_id']    = 'extHeader4-hs';
        $this->data['menu_class'] = 'cid-uqdU5tPdTp';

        isset($this->session->corporate_info) ? $this->data['menu_main'] = $this->session->corporate_info : $this->data['menu_main'] = $this->utilities->method_to_menu($this->router->fetch_class());

        $this->data['menu_right'] = NULL;
        $this->data['menu_right_url'] = NULL;
        $this->data['menu_left']      = NULL;
        $this->data['menu_left_url']  = NULL;

    }

    public function vision_mission_core_value() {

        isset($this->session->vision_mission_core_value) ? $this->data['menu'] = $this->session->vision_mission_core_value : $this->data['menu'] = 'Vision • Mision • Core Value';
        isset($this->session->company_s_history) ? $this->data['menu_right']   = $this->session->company_s_history : $this->data['menu_right']   = 'Company \'s History';
        $this->data['menu_right_url']                                          = BASE_URL . 'company-s-history';

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/corporate_info/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function company_s_history() {

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

        isset($this->session->business_overview) ? $this->data['menu']           = $this->session->business_overview : $this->data['menu']           = $this->utilities->method_to_menu('business_overview');
        isset($this->session->message_from_chairman) ? $this->data['menu_right'] = $this->session->message_from_chairman : $this->data['menu_right'] = $this->utilities->method_to_menu('message_from_ceo_and_coo');
        $this->data['menu_right_url']                                            = BASE_URL . $this->utilities->method_to_link('message_from_ceo_and_coo');
        isset($this->session->company_s_history) ? $this->data['menu_left']      = $this->session->company_s_history : $this->data['menu_left']      = 'Company \'s History';
        $this->data['menu_left_url']                                             = BASE_URL . $this->utilities->method_to_link('company_s_history');

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        if($this->session->userdata('lang')=='thai'){
            $this->load->view('ir/corporate_info/' . $this->router->fetch_method().'_th', $this->data);
        }else{
            $this->load->view('ir/corporate_info/' . $this->router->fetch_method(), $this->data);
        }
        
        $this->load->view('ir/footer', $this->data);

    }

    public function message_from_chairman() {

        isset($this->session->message_from_chairman) ? $this->data['menu']          = $this->session->message_from_chairman : $this->data['menu']          = 'Message from Chairman';
        isset($this->session->message_from_ceo_and_coo) ? $this->data['menu_right'] = $this->session->message_from_ceo_and_coo : $this->data['menu_right'] = $this->utilities->method_to_menu('message_from_ceo_and_coo');
        $this->data['menu_right_url']                                               = BASE_URL . $this->utilities->method_to_link('message_from_ceo_and_coo');
        isset($this->session->business_overview) ? $this->data['menu_left']         = $this->session->business_overview : $this->data['menu_left']         = $this->utilities->method_to_menu('business_overview');
        $this->data['menu_left_url']                                                = BASE_URL . $this->utilities->method_to_link('business_overview');

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/corporate_info/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function message_from_ceo_and_coo() {

        isset($this->session->message_from_ceo_and_coo) ? $this->data['menu']   = $this->session->message_from_ceo_and_coo : $this->data['menu']   = 'Message from CEO & COO';
        isset($this->session->company_structure) ? $this->data['menu_right']    = $this->session->company_structure : $this->data['menu_right']    = $this->utilities->method_to_menu('company_structure');
        $this->data['menu_right_url']                                           = BASE_URL . $this->utilities->method_to_link('company_structure');
        isset($this->session->message_from_chairman) ? $this->data['menu_left'] = $this->session->message_from_chairman : $this->data['menu_left'] = $this->utilities->method_to_menu('message_from_chairman');
        $this->data['menu_left_url']                                            = BASE_URL . $this->utilities->method_to_link('message_from_chairman');

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/corporate_info/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function company_structure() {

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

        isset($this->session->board_of_director) ? $this->data['menu']       = $this->session->board_of_director : $this->data['menu']       = $this->utilities->method_to_menu('board_of_director');
        isset($this->session->management_team) ? $this->data['menu_right']   = $this->session->management_team : $this->data['menu_right']   = $this->utilities->method_to_menu('management_team');
        $this->data['menu_right_url']                                        = BASE_URL . $this->utilities->method_to_link('management_team');
        isset($this->session->organization_chart) ? $this->data['menu_left'] = $this->session->organization_chart : $this->data['menu_left'] = $this->utilities->method_to_menu('organization_chart');
        $this->data['menu_left_url']                                         = BASE_URL . $this->utilities->method_to_link('organization_chart');

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        if ($this->session->lang == 'thai') {
            $this->load->view('ir/corporate_info/board_of_director_th', $this->data);
        } else {
            $this->load->view('ir/corporate_info/' . $this->router->fetch_method(), $this->data);
        }
        $this->load->view('ir/footer', $this->data);

    }

    public function management_team() {

        isset($this->session->management_team) ? $this->data['menu']        = $this->session->management_team : $this->data['menu']        = $this->utilities->method_to_menu('management_team');
        isset($this->session->awards) ? $this->data['menu_right']           = $this->session->awards : $this->data['menu_right']           = $this->utilities->method_to_menu('awards');
        $this->data['menu_right_url']                                       = BASE_URL . $this->utilities->method_to_link('awards');
        isset($this->session->board_of_director) ? $this->data['menu_left'] = $this->session->board_of_director : $this->data['menu_left'] = $this->utilities->method_to_menu('board_of_director');
        $this->data['menu_left_url']                                        = BASE_URL . $this->utilities->method_to_link('board_of_director');

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        if ($this->session->lang == 'thai') {
            $this->load->view('ir/corporate_info/management_team_th', $this->data);
        } else {
            $this->load->view('ir/corporate_info/' . $this->router->fetch_method(), $this->data);
        }

        $this->load->view('ir/footer', $this->data);

    }

    public function awards() {

        isset($this->session->awards) ? $this->data['menu']               = $this->session->awards : $this->data['menu']               = $this->utilities->method_to_menu('awards');
        isset($this->session->management_team) ? $this->data['menu_left'] = $this->session->management_team : $this->data['menu_left'] = $this->utilities->method_to_menu('board_of_dirmanagement_teamector');
        $this->data['menu_left_url']                                      = BASE_URL . $this->utilities->method_to_link('management_team');

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/corporate_info/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

}
