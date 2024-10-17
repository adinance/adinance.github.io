<?php defined('BASEPATH') OR exit('No direct script access allowed');

class News_room extends CI_Controller {

    public $menu = array();
    public $data = array();

    public function __construct() {
        parent::__construct();
        $this->menu['id']    = 'extHeader4-hw';
        $this->menu['class'] = 'cid-uqepLGAgfF';
    }

    public function set_annoucements() {

        $this->data['menu_id']                                            = $this->menu['id'];
        $this->data['menu_class']                                         = $this->menu['class'];
        isset($this->session->news_room) ? $this->data['menu_main']       = $this->session->news_room : $this->data['menu_main']       = $this->utilities->method_to_menu($this->router->fetch_class());
        isset($this->session->set_annoucements) ? $this->data['menu']     = $this->session->set_annoucements : $this->data['menu']     = $this->utilities->method_to_menu('set_annoucements');
        isset($this->session->press_releases) ? $this->data['menu_right'] = $this->session->press_releases : $this->data['menu_right'] = $this->utilities->method_to_menu('press_releases');
        $this->data['menu_right_url']                                     = BASE_URL . $this->utilities->method_to_link('press_releases');
        $this->data['menu_left']                                          = '';
        $this->data['menu_left_url']                                      = NULL;

        $this->data['result'] = $this->apps->get_news_rooms_by_configuration_id(5);

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/news_room/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function press_releases() {

        $this->data['menu_id']                                             = $this->menu['id'];
        $this->data['menu_class']                                          = $this->menu['class'];
        isset($this->session->news_room) ? $this->data['menu_main']        = $this->session->news_room : $this->data['menu_main']        = $this->utilities->method_to_menu($this->router->fetch_class());
        isset($this->session->press_releases) ? $this->data['menu']        = $this->session->press_releases : $this->data['menu']        = $this->utilities->method_to_menu('press_releases');
        isset($this->session->news_clipping) ? $this->data['menu_right']   = $this->session->news_clipping : $this->data['menu_right']   = $this->utilities->method_to_menu('news_clipping');
        $this->data['menu_right_url']                                      = BASE_URL . $this->utilities->method_to_link('news_clipping');

        isset($this->session->set_annoucements) ? $this->data['menu_left'] = $this->session->set_annoucements : $this->data['menu_left'] = $this->utilities->method_to_menu('set_annoucements');
        $this->data['menu_left_url']                                       = BASE_URL . $this->utilities->method_to_link('set_annoucements');

        $this->data['result'] = $this->apps->get_news_rooms_by_configuration_id(6);

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/news_room/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function news_clipping() {

        $this->data['menu_id']                                             = $this->menu['id'];
        $this->data['menu_class']                                          = $this->menu['class'];
        isset($this->session->news_room) ? $this->data['menu_main']        = $this->session->news_room : $this->data['menu_main']        = $this->utilities->method_to_menu($this->router->fetch_class());
        isset($this->session->news_clipping) ? $this->data['menu']        = $this->session->news_clipping : $this->data['menu']        = $this->utilities->method_to_menu('news_clipping');
        $this->data['menu_right']   = NULL;
        $this->data['menu_right_url']                                      = NULL;
        isset($this->session->press_releases) ? $this->data['menu_left'] = $this->session->press_releases : $this->data['menu_left'] = $this->utilities->method_to_menu('press_releases');
        $this->data['menu_left_url']                                       = BASE_URL . $this->utilities->method_to_link('press_releases');

        $this->data['result'] = $this->apps->get_news_rooms_by_configuration_id(7);

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/news_room/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

}
