<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('navbar3');
		$this->load->view('video_intro');
		$this->load->view('parallax_intro');
		$this->load->view('about_us');
		// $this->load->view('work_stats');
		$this->load->view('events');
		$this->load->view('entertainment');
		$this->load->view('equipments');
		$this->load->view('technology');
		$this->load->view('museum');
		$this->load->view('news');
		$this->load->view('contact');
		$this->load->view('footer');

	}
}
