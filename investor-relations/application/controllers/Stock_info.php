<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Stock_info extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        redirect('https://www.settrade.com/th/equities/quote/cmo/overview', 'location');
    }



}