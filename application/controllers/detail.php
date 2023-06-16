<?php

	class detail extends CI_Controller{
        //properti
    public $table_sumber;

		public function __construct(){
			parent::__construct();
			$this->load->model('product_m');
      $this->table_sumber = 'produk';
		}

		public function index(){
      $this->load->view('link/header');
			$data['datanya'] = $this->product_m->productDetail();
			$this->load->view('detail/detail_v',$data);
			$this->load->view('link/footer');
		}

		public function blmLogin(){
      $this->load->view('link/header');
			$data['datanya'] = $this->product_m->productDetail();//ini nih fungsi narik dari db dan di lempar ke view
			$this->load->view('detail/detail2_v',$data); //dia akses ke view ini, oke mas
			$this->load->view('link/footer');
		}
	}

?>
