<?php
class Home extends CI_Controller {
	function index()
	{
		$this->load->view('user/header');
		$this->load->view('user/event');
		$this->load->view('user/footer');
	}
}