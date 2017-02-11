<?php
 
class Simpan_pemilik extends CI_Model{
	function tampil_data(){
		return $this->db->get('');
	}
 
	function input_pemilik($namapemilik,$notelppemilk,$alamat,$email,$username,$password){
		$data = array(
			'nama_pemilik' => $namapemilik,
			'alamat' => $notelppemilk,
			'no_telp' => $alamat,
			'email' => $email,
			'username' => $username,
			'password' => $password,
			);

		return $this->db->insert('pemilik',$data);
	}
}