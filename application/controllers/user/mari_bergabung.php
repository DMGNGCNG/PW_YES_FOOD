<?php
class Mari_bergabung extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('simpan_pemilik');
		$this->load->helper('url');
 
	}
	function index() {
		$this->load->view('user/header');
		$this->load->view('user/mari_bergabung');
		$this->load->view('user/footer');
	}

	function addpemilik(){
		$namapemilik = $this->input->post("inputnama_pemilik");
		$notelppemilik = $this->input->post("inputnotelp_pemilik");
		$alamat = $this->input->post("inputalamat_pemilik");
		$email = $this->input->post("inputemail");
		$username = $this->input->post("inputusername");
		$password = $this->input->post("inputpassword");
		$confirmpassword = $this->input->post("inputconfirm_password");
		/*echo 
			"<br>".$namapemilik.
			"<br>".$notelppemilik.
			"<br>".$alamat.
			"<br>".$email.
			"<br>".$password.
			"<br>".$confirmpassword
			;*/

		$this->$this->form_validation->set_rules('inputnama_pemilik', 'Nama Pemilik', 'required');

		$this->$this->form_validation->set_rules('inputnotelp_pemilik', 'Nomer Telp Pemilik', 'required');

		$this->$this->form_validation->set_rules('inputalamat_pemilik', 'Alamat Pemilik', 'required');

		$this->$this->form_validation->set_rules('inputemail', 'Email', 'required');

		$this->form_validation->set_rules('inputusername', 'Username', 'required');

		$this->form_validation->set_rules('inputpassword', 'Password', 'required');
		
		$this->form_validation->set_rules('inputconfirm_password', 'Confirm Password', 'required');

		if ($this->form_validation->run() == TRUE) {
			if ($password == $confirmpassword){
				$this->model_user->input_pemilik($namapemilik,$notelppemilk,$alamat,$email,$username,$password);
				echo "Validasi Berhasil";
			} else {
				$data['err'] = 1;
				$this->load->view('Header');
				$this->load->view('mari_bergabung',$data);
				$this->load->view('Footer');
			}
			
		} else {
			$data['err'] = 2;
			$this->load->view('Header');
			$this->load->view('mari_bergabung',$data);
			$this->load->view('Footer');
		}		

	}

}