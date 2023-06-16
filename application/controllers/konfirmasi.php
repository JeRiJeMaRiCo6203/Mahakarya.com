<?php

	class konfirmasi extends CI_Controller{
        //properti
    public $table_sumber;

		public function __construct(){
			parent::__construct();
			$this->load->model('transaksi_m');
      $this->table_sumber = 'pengguna';
			$this->load->model('crud_m');
		}

		public function index(){
      $this->load->view('link/header');
			//$data['datanya'] = $this->transaksi_m->addressDetail();
			$this->load->view('transaksi/konfirmasi_v');
			$this->load->view('link/footer');
		}

		public function beli(){

				$id_pengguna = $this->input->post('iduser');
				$tanggal = $this->input->post('tanggal');
				$id_produk = $this->input->post('idproduk');
				$status = "Belum Bayar";

				$data = array(
					"id_pengguna"=>$id_pengguna,
					"tanggal"=>$tanggal,
					"id_produk"=>$id_produk,
					"status_transaksi"=>$status
				);

				$this->crud_m->input_data($data, 'transaksi');
				redirect('bayar');
		}

	}

?>
