<?php defined('BASEPATH') OR exit('No direct script access allowed');

class News_room extends CI_Controller {

    public $menu = array();
    public $data = array();

    public function __construct() {
        parent::__construct();
        $this->data['menu_id']    = 'extHeader4-hw';
        $this->data['menu_class'] = 'cid-uqepLGAgfF';

        isset($this->session->news_room) ? $this->data['menu_main']       = $this->session->news_room : $this->data['menu_main']       = $this->utilities->method_to_menu($this->router->fetch_class());

        $this->data['menu_right'] = NULL;
        $this->data['menu_right_url'] = NULL;
        $this->data['menu_left']      = NULL;
        $this->data['menu_left_url']  = NULL;

    }

    public function set_annoucements() {

        isset($this->session->set_annoucements) ? $this->data['menu']     = $this->session->set_annoucements : $this->data['menu']     = $this->utilities->method_to_menu('set_annoucements');
        isset($this->session->press_releases) ? $this->data['menu_right'] = $this->session->press_releases : $this->data['menu_right'] = $this->utilities->method_to_menu('press_releases');
        $this->data['menu_right_url']                                     = BASE_URL . $this->utilities->method_to_link('press_releases');

        $current_year = date("Y");
        
        for($year = $current_year; $year >= 2014; $year--){
            $this->data['result'][$year] = $this->apps->get_news_rooms_by_configuration_id_year(5, $year);
        }

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/news_room/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function press_releases() {

        isset($this->session->press_releases) ? $this->data['menu']      = $this->session->press_releases : $this->data['menu']      = $this->utilities->method_to_menu('press_releases');
        isset($this->session->news_clipping) ? $this->data['menu_right'] = $this->session->news_clipping : $this->data['menu_right'] = $this->utilities->method_to_menu('news_clipping');
        $this->data['menu_right_url']                                    = BASE_URL . $this->utilities->method_to_link('news_clipping');

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

        isset($this->session->news_clipping) ? $this->data['menu']       = $this->session->news_clipping : $this->data['menu']       = $this->utilities->method_to_menu('news_clipping');
        isset($this->session->vdo_clip) ? $this->data['menu_right'] = $this->session->vdo_clip : $this->data['menu_right'] = $this->utilities->method_to_menu('vdo_clip');
        $this->data['menu_right_url']                                    = BASE_URL . $this->utilities->method_to_link('vdo_clip');
        isset($this->session->press_releases) ? $this->data['menu_left'] = $this->session->press_releases : $this->data['menu_left'] = $this->utilities->method_to_menu('press_releases');
        $this->data['menu_left_url']                                     = BASE_URL . $this->utilities->method_to_link('press_releases');

        $this->data['result'] = $this->apps->get_news_rooms_by_configuration_id(7);

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/news_room/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

    public function vdo_clip() {

        isset($this->session->vdo_clip) ? $this->data['menu']       = $this->session->vdo_clip : $this->data['menu']       = $this->utilities->method_to_menu('vdo_clip');
        isset($this->session->news_clipping) ? $this->data['menu_left'] = $this->session->news_clipping : $this->data['menu_left'] = $this->utilities->method_to_menu('news_clipping');
        $this->data['menu_left_url']                                     = BASE_URL . $this->utilities->method_to_link('news_clipping');

        // $this->data['result'] = $this->apps->get_news_rooms_by_configuration_id(7);

        $this->load->view('ir/header', $this->data);
        $this->load->view('ir/navigation', $this->data);
        $this->load->view('ir/menu', $this->data);
        $this->load->view('ir/news_room/' . $this->router->fetch_method(), $this->data);
        $this->load->view('ir/footer', $this->data);

    }

}
