<?php

	class adm_camera extends CI_Controller{
        //properti
    public $table_sumber;

		public function __construct(){
			parent::__construct();
			if(empty($this->session->userdata('u')))
				redirect();

			$this->load->model('product_m');
      $this->table_sumber = 'produk';

		}

		public function index(){
      $this->load->view('link/nav_admin');
      $this->load->view('link/menu_admin');
			$data['datanya'] = $this->product_m->tableCamera($this->table_sumber);
			$this->load->view('admin/datacamera_v',$data);
		}

		public function insert(){
      $this->load->view('link/nav_admin');
      $this->load->view('link/menu_admin');
      $this->load->view('admin/addproduct_v');
    }

    function aksi_insert(){
      $namav = $this->input->post('f1');
      $kategoriv = $this->input->post('f2');
      $fotov = $this->input->post('f3');
      $merekv = $this->input->post('f4');
      $spesifikasiv = $this->input->post('f5');
      $hargav = $this->input->post('f6');
      $stokv = $this->input->post('f9');
      $statusv = $this->input->post('f8');

      $data = array(
        "nama"=>$this->input->post('f1'),
				"id_kategori" => 4,
        "foto"=>$this->input->post('f3'),
        "merek"=>$this->input->post('f4'),
        "spesifikasi"=>$this->input->post('f5'),
        "harga"=>$this->input->post('f6'),
        "stok"=>$this->input->post('f9'),
				"status"=>"old"
      );

      $this->product_m->input_data($data, $this->table_sumber);
      redirect('adm_camera');
      }

       public function update($id_produk){
				 $this->load->view('link/nav_admin');
	       $this->load->view('link/menu_admin');
         $where = array('id_produk'=>$id_produk);
         $data['selectX'] = $this->product_m->selectX($this->table_sumber,$where);
         $this->load->view('admin/updatecamera_v',$data);
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
			redirect('adm_camera');
      }

        public function aksi_delete($id_produk){
            $where = array("id_produk"=>$id_produk);
            $this->product_m->delete_data($this->table_sumber,$where);
            redirect('adm_camera');
        }

	}

?>
