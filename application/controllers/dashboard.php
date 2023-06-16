<?php

	class dashboard extends CI_Controller{
		public $tabel_sumber;
		public function __construct(){
		parent::__construct();
		$this->load->model('crud_m');
		$this->tabel_sumber='produk';
	}

		public function index(){
			$this->load->view('link/nav_admin');
			$data = $this->crud_m->get_stok($this->tabel_sumber);
			$data_penjualan = $this->crud_m->get_jual();
			$data['data'] = $data;
			$data['penjualan'] = $data_penjualan;
			$this->load->view('dashboard/dashboard_v',$data);
			$this->load->view('link/menu_admin');
		}

		public function json(){
		$c=array(
					'caption'=>'Stock Data',
					'subCaption'=>'DY Gadget Shop',
					'xAxisName'=>'Nama',
					'yAxisName'=>'Stok',
					'theme'=>'fint'
				);

				$d=array();

				$query= $this->crud_m->dataChart($this->tabel_sumber);
				foreach ($query->result() as $r) :
					array_push($d,array('label'=>$r->nama, 'value'=>$r->stok));
				endforeach;

				echo json_encode(array('chart'=>$c,'data'=>$d));

			}
	}

?>
