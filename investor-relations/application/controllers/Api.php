<?php defined('BASEPATH') OR exit('No direct script access allowed');

// require_once('libraries/Utilities.php');

class Api extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
    }


    function language($language = '') {
        // $ss_lang = $this->session->lang;
        // $language = $this->session->lang;
        // $language = ($language != "") ? $language : "english";

        // $lang = $this->language->switch($language);
        // header('Content-Type: application/json');
        // echo json_encode($lang);

        $this->language->switch($language);
        // var_dump($lang);
    }

    public function swal(){

        $data['swal'] = $this->swal->sent('success', 'Message Sent!' , 'false', 3500);
       
        $this->load->view('ir/header', $data);
        $this->load->view('ir/sweet-alert', $data);
        $this->load->view('ir/footer', $data);
    }

    public function ics(){

        $event = $this->calendar->ICS("2009-11-06 09:00","2009-11-06 21:00","Test Event","This is an event made by Jamie Bicknell","GU1 1AA");
        $event->save();
    }

   

    
}
