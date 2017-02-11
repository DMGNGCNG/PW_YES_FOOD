<?php
class About extends CI_Controller {
	function index() {
		$this->load->view('user/header');
		$this->load->view('user/about');
		$this->load->view('user/footer');
	}
}