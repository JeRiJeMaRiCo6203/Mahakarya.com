<?php

	class registration extends CI_Controller{
        //properti
        //public $table_sumber;

		public function index(){
      $this->load->view('link/header');
			//$data['menunya'] = $this->menu_m->selectSemua($this->table_sumber);
			$this->load->view('registration/registration_v');
      $this->load->view('link/footer');
		}
	}

?>
