<?php
class Tempat_makan extends CI_Controller {
	function index ()
	{
		$this->load->view('user/header');
		$this->load->view('user/tempat_makan');
		$this->load->view('user/footer');
	}
}