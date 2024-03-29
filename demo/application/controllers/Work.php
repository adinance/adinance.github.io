<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Work extends CI_Controller {


	public function index()
	{
		$this->load->view('header');
		$this->load->view('navbar3');
		$this->load->view('our_work');
		$this->load->view('footer');
	}
}
