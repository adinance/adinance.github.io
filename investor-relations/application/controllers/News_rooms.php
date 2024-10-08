<?php defined('BASEPATH') OR exit('No direct script access allowed');

class News_rooms extends CI_Controller {

    public $menu;
    public $data;

    public function __construct() {
        parent::__construct();
        $this->data = array();
        $this->menu = $this->utilities->method_to_menu($this->router->fetch_method());
    }

    public function index() {
        $this->set_annoucements();
    }

    public function set_annoucements() {

        isset($this->session->set_annoucements) ? $this->data['menu'] = $this->session->set_annoucements : $this->data['menu'] = 'Set Annoucements';
        isset($this->session->press_releases) ? $this->data['menu_right'] = $this->session->press_releases : $this->data['menu_right'] = 'Press Releases';
        $this->data['menu_right_url']                                       = BASE_URL . 'press-releases';
        $this->data['menu_left'] = '';
        $this->data['menu_left_url']                                      = NULL;

        $this->data['result'] = $this->apps->get_news_rooms_by_configuration_id(5);

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/news_rooms/set_annoucements', $this->data);
        $this->load->view('ir/footer', $this->data);


    }

    public function press_releases() {

        isset($this->session->press_releases) ? $this->data['menu'] = $this->session->press_releases : $this->data['menu'] = 'Press Releases';
        isset($this->session->set_annoucements) ? $this->data['menu_left'] = $this->session->set_annoucements : $this->data['menu_left'] = 'Set Annoucements';
        $this->data['menu_left_url']                                       = BASE_URL . 'set-annoucements';
        isset($this->session->news_clipping) ? $this->data['menu_right'] = $this->session->news_clipping : $this->data['menu_right'] = 'News Clipping';
        $this->data['menu_right_url']                                      = BASE_URL . 'news-clipping';

        $this->data['result'] = $this->apps->get_news_rooms_by_configuration_id(6);

        // exit();
        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/news_rooms/press_releases', $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function news_clipping() {

        isset($this->session->news_clipping) ? $this->data['menu'] = $this->session->news_clipping : $this->data['menu'] = 'News Clipping';
        isset($this->session->set_annoucements) ? $this->data['menu_left'] = $this->session->set_annoucements : $this->data['menu_left'] = 'Set Annoucements';
        $this->data['menu_left_url']                                       = BASE_URL . 'set-annoucements';
        $this->data['menu_right'] = '';
        $this->data['menu_right_url']                                      = NULL;

        $this->data['result'] = $this->apps->get_file_by_configuration_id(2);

        // exit();
        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/news_rooms/news_clipping', $this->data);
        $this->load->view('ir/footer', $this->data);
      
    }


}
