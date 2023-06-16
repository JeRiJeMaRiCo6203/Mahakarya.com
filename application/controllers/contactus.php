<?php

	class contactus extends CI_Controller{
    function __construct(){
				parent::__construct();
				$this->load->library('session');
				$this->load->helper('form');
		}

		public function index(){
      $this->load->view('link/header');
			//$data['menunya'] = $this->menu_m->selectSemua($this->table_sumber);
			$this->load->helper('form');
			$this->load->view('contactus/contactus_v');
      $this->load->view('link/footer');
		}

		/*public function send_mail(){
			$from_email = "Email";
			$to_email = $this->input->post('email');

			$this->load($from_email,'nama')
			$this->email->to($to_email);
			$this->email->subject('subject');
			$this->email->message('message');

			if($this->email->send())
			$this-session->set_flashdata("email_sent","Email sent successfully");
			else {
				$this->session->set_flashdata("email_sent","error in sending Email");
				$this->load->view('link/header');
				$this->load->view('contactus/contactus_v');
				$this->load->view('link/footer');
			}

		}*/
	}

?>
