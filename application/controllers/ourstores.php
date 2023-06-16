<?php

	class ourstores extends CI_Controller{
        //properti
        //public $table_sumber;

		public function index(){
      $this->load->view('link/header');
			//$data['menunya'] = $this->menu_m->selectSemua($this->table_sumber);
			$this->load->view('ourstores/ourstores_v');
      $this->load->view('link/footer');
		}
	}

?>
