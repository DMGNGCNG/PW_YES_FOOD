<?php
class Login extends CI_Controller {
	function index() {
		$this->load->view('user/header');
		$this->load->view('user/login');
		$this->load->view('user/footer');
	}
}