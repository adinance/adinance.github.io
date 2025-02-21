<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Apps extends CI_Controller {

    public $user;
    public $data;

    public function __construct() {
        parent::__construct();
        $this->data         = array();
    }

    public function index() {
    }

    public function preview($id = '0') {
        $this->data['url']        = $this->apps->get_row($id)->source;
        $this->data['name']        = $this->apps->get_row($id)->name;
        $this->load->view('apps/preview', $this->data);
    }

    public function pdf() {
        // $this->data['url']        = $this->apps->get_row($id)->source;
        // $this->data['name']        = $this->apps->get_row($id)->name;
        $this->load->view('apps/pdf');
    }

    public function pdpa() {
        // $this->data['url']        = $this->apps->get_row($id)->source;
        // $this->data['name']        = $this->apps->get_row($id)->name;
        $this->load->view('apps/pdpa');
    }


    public function dev() {

        isset($this->session->general_information) ? $this->data['menu']             = $this->session->general_information : $this->data['menu']             = $this->utilities->method_to_menu($this->router->fetch_method());
        isset($this->session->major_shareholder) ? $this->data['menu_right'] = $this->session->major_shareholder : $this->data['menu_right'] = $this->utilities->method_to_menu('major_shareholder');
        $this->data['menu_right_url']                                                = BASE_URL . $this->utilities->method_to_link('major_shareholder');
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

        $this->load->view('ir/sharehoder_info/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

}
