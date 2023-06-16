<?php

	class transaksi extends CI_Controller{
        //properti
    public $table_sumber;

		public function __construct(){
			parent::__construct();
			//if(empty($this->session->userdata('u')))
				//redirect();

			$this->load->model('product_m');
      $this->table_sumber = 'produk';
			$this->table_sumber = 'pengguna';

		}

		public function index(){
      $this->load->view('link/header');
		//	$data['datanya'] = $this->product_m->tableHandphone($this->table_sumber);
			$this->load->view('transaksi/konfirmasi_v',$data);
      $this->load->view('link/footer');
		}

		public function insert(){
      $this->load->view('link/nav_admin');
      $this->load->view('link/menu_admin');
      $this->load->view('admin/addproduct_v');
    }

    function aksi_insert(){
      $id_pengguna = $this->session->userdata('id_pengguna');
      $tanggal = $this->input->('Y-m-d H:i:s');
      $id_produk = $this->input->post('f3');
      $statustransaksi = $this->input->post('f4');

      $data = array(
        "id_pengguna"=>$id_pengguna,
				"tanggal" => $tanggal,
        "id_produk"=>$id_produk,
        "statustransaksi"=>$statustransaksi
      );

      $this->product_m->input_data($data, $this->table_sumber);
      redirect('adm_handphone');
      }

       public function update($id_produk){
				 $this->load->view('link/nav_admin');
	       $this->load->view('link/menu_admin');
         $where = array('id_produk'=>$id_produk);
         $data['selectX'] = $this->product_m->selectX($this->table_sumber,$where);
         $this->load->view('admin/updatehandphone_v',$data);
        }

        public function aksi_update($id_produk){
            $data = array(
							"nama"=>$this->input->post('f1'),
							"id_kategori"=>$this->input->post('f2'),
							"foto"=>$this->input->post('f3'),
							"merek"=>$this->input->post('f4'),
							"spesifikasi"=>$this->input->post('f5'),
							"harga"=>$this->input->post('f6'),
							"stok"=>$this->input->post('f9'),
							"status"=>"old"
			);
			$where = array('id_produk'=>$this->input->post('fid'));
			$this->product_m->update_data($this->table_sumber,$data,$where);
			redirect('adm_handphone');
      }

        public function aksi_delete($id_produk){
            $where = array("id_produk"=>$id_produk);
            $this->product_m->delete_data($this->table_sumber,$where);
            redirect('adm_handphone');
        }

	}

?>
