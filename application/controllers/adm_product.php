<?php

	class adm_product extends CI_Controller{
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
			$data['datanya'] = $this->product_m->tableProduct($this->table_sumber);
			$this->load->view('admin/dataproduct_v',$data);
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
			$harga_baruv = $this->input->post('f7');
      $status = $this->input->post('f8');
      $stokv = $this->input->post('f9');

      $data = array(
        "nama"=>$this->input->post('f1'),
        "id_kategori"=>$this->input->post('f2'),
        "foto"=>$this->input->post('f3'),
        "merek"=>$this->input->post('f4'),
        "spesifikasi"=>$this->input->post('f5'),
        "harga"=>$this->input->post('f6'),
				"harga_baru"=>$this->input->post('f7'),
				"status"=>$this->input->post('f8'),
        "stok"=>$this->input->post('f9')
      );

      $this->crud_m->input_data($data, $this->table_sumber);
      redirect('adm_product');
      }

       public function update($id_produk){
				 $this->load->view('link/nav_admin');
	       $this->load->view('link/menu_admin');
         $where = array('id_produk'=>$id_produk);
         $data['selectX'] = $this->crud_m->selectX($this->table_sumber,$where);
         $this->load->view('admin/updateproduct_v',$data);
        }

      public function aksi_update($id_produk){
            $data = array(
							"nama"=>$this->input->post('f1'),
							"id_kategori"=>$this->input->post('f2'),
							"foto"=>$this->input->post('f3'),
							"merek"=>$this->input->post('f4'),
							"spesifikasi"=>$this->input->post('f5'),
							"harga"=>$this->input->post('f6'),
							"harga_baru"=>$this->input->post('f7'),
							"status"=>$this->input->post('f8'),
							"stok"=>$this->input->post('f9')
			);
			$where = array('id_produk'=>$this->input->post('fid'));
			$this->crud_m->update_data($this->table_sumber,$data,$where);
			redirect('adm_product');
      }

        public function aksi_delete($id_produk){
            $where = array("id_produk"=>$id_produk);
            $this->crud_m->delete_data($this->table_sumber,$where);
            redirect('adm_product');
        }
	}

?>
