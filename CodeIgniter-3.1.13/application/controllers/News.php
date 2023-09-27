<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {


	public function index()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('news_page');
		$this->load->view('footer');
	}
}
