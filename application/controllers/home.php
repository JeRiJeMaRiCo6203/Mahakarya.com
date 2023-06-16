<?php
	#[\AllowDynamicProperties]
	class home extends CI_Controller{
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
			$data['datanya1'] = $this->product_m->tableNewProduct5($this->table_sumber);
			$data['datanya2'] = $this->product_m->listSeniman($this->table_sumber);
			$data['datanya3'] = $this->product_m->listPatung($this->table_sumber);
			// echo json_encode($data['datanya3']->result());
			// exit();

			$this->load->view('home/home_v',$data);
			$this->load->view('link/footer');
		}


	}

?>
