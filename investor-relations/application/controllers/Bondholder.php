<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bondholder extends CI_Controller {

    public $menu = array();
    public $data = array();

    public function __construct() {
        parent::__construct();
        $this->data['menu_id']    = 'extHeader4-r4';
        $this->data['menu_class'] = 'cid-utSJbILJ5j';

        isset($this->session->bondholder) ? $this->data['menu_main']  = $this->session->bondholder : $this->data['menu_main']  = $this->utilities->method_to_menu($this->router->fetch_class());
        isset($this->session->bond_information) ? $this->data['menu'] = $this->session->bond_information : $this->data['menu'] = $this->utilities->method_to_menu($this->router->fetch_method());

    }

    public function bond_information() {

        isset($this->session->shareholder_s_meeting) ? $this->data['menu_right'] = $this->session->shareholder_s_meeting : $this->data['menu_right'] = 'Shareholder\'s Meeting';
        $this->data['menu_right_url']                                            = BASE_URL . $this->utilities->method_to_link('shareholder_s_meeting');
        $this->data['menu_left']                                                 = '';
        $this->data['menu_left_url']                                             = NULL;

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        if($this->session->lang == 'thai'){
            $this->load->view('ir/bondholder/' . $this->router->fetch_method().'_th', $this->data);
        }else{
            $this->load->view('ir/bondholder/' . $this->router->fetch_method(), $this->data);
        }
        
        $this->load->view('ir/footer', $this->data);
    }

    public function contact_for_bondholders() {

        isset($this->session->ir_calendar) ? $this->data['menu']                       = $this->session->contact_for_bondholders : $this->data['menu']                       = $this->utilities->method_to_menu('contact_for_bondholders');
        $this->data['menu_right']                                                      = NULL;
        $this->data['menu_right_url']                                                  = NULL;
        isset($this->session->bond_information) ? $this->data['menu_left'] = $this->session->bond_information : $this->data['menu_left'] = $this->utilities->method_to_menu('bond_information');
        $this->data['menu_left_url']                                                   = BASE_URL . $this->utilities->method_to_link('bond_information');

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        if($this->session->lang == 'thai'){
            $this->load->view('ir/bondholder/' . $this->router->fetch_method().'_th', $this->data);
        }else{
            $this->load->view('ir/bondholder/' . $this->router->fetch_method(), $this->data);
        }
        $this->load->view('ir/footer', $this->data);

    }

}
