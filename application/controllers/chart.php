<?php

	class chart extends CI_Controller{


		public function index(){
      //$this->load->view('link/nav_admin');
			//$this->load->view('link/menu_admin');
      $this->load->model('chart_m');
			$this->load->view('chart_v');
		}

    public function panggilChart()
    {
      data['chartnya'] = $this->chart_m->ambilChart();
      $row = $data->row();
      $this->load->view('chart_v', $data);
    }
	}

?>
