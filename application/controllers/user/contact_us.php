<?php
class Contact_us extends CI_Controller {
	function index() {
		$this->load->view('user/header');
		$this->load->view('user/contact_us');
		$this->load->view('user/footer');
	}
}