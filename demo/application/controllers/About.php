<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('navbar3');
		$this->load->view('about1');
		$this->load->view('about_us');
		$this->load->view('footer');

	}
}
