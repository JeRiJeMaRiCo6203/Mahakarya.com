<?php

class login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('login_m');
	}

	public function index(){
		$this->session->set_userdata('l', 'belum login');
		$this->load->view('link/header');
		$this->load->view('login/login_v');
		$this->load->view('link/footer');
	}

	public function verifikasi(){
		
	$username=$this->input->post('username');
	$password=$this->input->post('password');

	$where=array('username'=>$username, 'password'=>$password);

	$result=$this->login_m->cekLogin($username,$password);
	if($result->num_rows()>0){
		$row=$result->row();
		$this->session->set_userdata('id', $row->id_pengguna);
		$this->session->set_userdata('u',$username);
		$this->session->set_userdata('n',$row->nama);
		$this->session->set_userdata('l',$row->level);
		$this->session->set_userdata('alamat', $row->alamat);
		$this->session->set_userdata('kota', $row->kota);
		$this->session->set_userdata('kode_pos', $row->kode_pos);
		$this->session->set_userdata('no_telp', $row->no_telp);
		if ($row->level == 'admin') {
			redirect('dashboard');
		} else {
			$session = array('id_penggguna' => $row->id_pengguna,'nama' => $row->nama, 'level' => $row->level);
			$this->session->set_userdata($session);
			redirect('home');
		}
		
		
	} else {
		$msg = "User is not registered please check username and password";
		$this->session->set_userdata('msg', $msg);
		redirect('login');
	}
}

public function logout()
	{
		$this->session->sess_destroy();
		redirect();
	}
}

?>
