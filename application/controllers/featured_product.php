<?php

	class featured_product extends CI_Controller{
		  public $table_sumber;

			public function __construct(){
			parent::__construct();
			//if(empty($this->session->userdata('u')))
				//redirect();

			$this->load->model('product_m');
			$this->table_sumber = 'produk';

		}
		public function index(){
      $this->load->view('link/header');
			$data['datanya'] = $this->product_m->listSeniman($this->table_sumber);
			$this->load->view('product/featuredproduct_v',$data);
      $this->load->view('link/footer');
		}


	}

?>
