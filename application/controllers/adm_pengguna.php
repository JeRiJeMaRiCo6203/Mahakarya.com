<?php

	class adm_pengguna extends CI_Controller{
        //properti
    public $table_sumber;

		public function __construct(){
			parent::__construct();
			if(empty($this->session->userdata('u')))
				redirect();

			$this->load->model('crud_m');
			$this->table_sumber = 'pengguna';

		}

		public function index(){
			$this->load->view('link/nav_admin');
			$this->load->view('link/menu_admin');
			$data['datanya'] = $this->crud_m->selectSemua($this->table_sumber);
			$this->load->view('admin/datapengguna_v',$data);
		}

    public function insert(){
      $this->load->view('link/nav_admin');
      $this->load->view('link/menu_admin');
      $this->load->view('admin/datapengguna_v');
    }

    function aksi_insert(){
      $namav = $this->input->post('f1');
      $no_telpv = $this->input->post('f2');
      $alamatv = $this->input->post('f3');
      $kotav = $this->input->post('f4');
      $kode_posv = $this->input->post('f5');
      $emailv = $this->input->post('f6');
      $usernamev = $this->input->post('f7');
      $passwordv = $this->input->post('f8');
      $levelv = $this->input->post('f9');

      $data = array(
        "nama"=>$namav,
        "no_telp"=>$no_telpv,
        "alamat"=>$alamatv,
        "kota"=>$kotav,
        "kode_pos"=>$kode_posv,
        "email"=>$emailv,
        "username"=>$usernamev,
        "password"=>$passwordv,
        "level" => $levelv
      );

      $this->crud_m->input_data($data, $this->table_sumber);
      redirect('adm_pengguna');
      }

       public function update($id_menu){
            $where = array('id'=>$id_menu);
            $data['penggunaX'] = $this->crud_m->selectX($this->table_sumber,$where);
            //$this->load->view('admin/updatepengguna_v',$data);
        }

        public function aksi_update($id_pengguna){
            $data = array(
              "nama"=>$this->input->post('f1'),
              "no_telp"=>$this->input->post('f2'),
              "alamat"=>$this->input->post('f3'),
              "kota"=>$this->input->post('f4'),
              "kode_pos"=>$this->input->post('f5'),
              "email"=>$this->input->post('f6'),
              "username"=>$this->input->post('f7'),
              "password"=>$this->input->post('f8'),
              "level" => $this->input->post('f9')
			);
			$where = array('id'=>$this->input->post('fid'));
			$this->crud_m->update_data($this->table_sumber,$data,$where);
			redirect('adm_pengguna');

        }

        public function aksi_delete($id_pengguna){
            $where = array("id_pengguna"=>$id_pengguna);
            $this->crud_m->delete_data($this->table_sumber,$where);
            redirect('adm_pengguna');
        }
	}

?>
