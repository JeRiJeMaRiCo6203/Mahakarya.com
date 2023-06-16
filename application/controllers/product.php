<?php

	class product extends CI_Controller{
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
			$data['datanya1'] = $this->product_m->tableFiguratif($this->table_sumber);
			$data['datanya2'] = $this->product_m->tableAbstrak($this->table_sumber);
			$data['datanya3'] = $this->product_m->tableNonfig($this->table_sumber);
			$data['datanya4'] = $this->product_m->tableRepresentasional($this->table_sumber);
			$data['datanya5'] = $this->product_m->tableRelief($this->table_sumber);
			$data['datanya6'] = $this->product_m->tablePerformatif($this->table_sumber);
			$this->load->view('product/product_v',$data);
      $this->load->view('link/footer');
		}


	}

?>
