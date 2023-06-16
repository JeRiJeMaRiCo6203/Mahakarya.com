<?php

	class pengguna extends CI_Controller{
        //properti
        public $table_sumber;

		public function __construct(){
			parent::__construct();
			$this->load->model('crud_m');
            $this->table_sumber = 'pengguna';
		}

		public function index(){
      $this->load->view('link/header');
			$data['datanya'] = $this->pengguna_m->selectSemua($this->table_sumber);
			$this->load->view('pengguna/pengguna_v',$data);
		}

		public function insert(){
			$this->load->view('registration/registration_v');
		}
    function aksi_insert(){
      $namav = $this->input->post('f1');
      $no_telpv = $this->input->post('f2');
      $alamatv = $this->input->post('f3');
      $kotav = $this->input->post('f4');
			$kode_posv = $this->input->post('f9');
      $emailv = $this->input->post('f5');
      $usernamev = $this->input->post('f6');
      $passwordv = $this->input->post('f7');

      $data = array(
        "nama"=>$namav,
        "no_telp"=>$no_telpv,
        "alamat"=>$alamatv,
        "kota"=>$kotav,
				"kode_pos"=>$kode_posv,
        "email"=>$emailv,
        "username"=>$usernamev,
        "password"=>$passwordv,
				"level" => "user"
      );

      $this->crud_m->input_data($data, $this->table_sumber);
      redirect('login');
      }

			
	}

?>
