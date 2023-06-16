<?php
  /**
   *
   */
  class myorder extends CI_Controller
  {

    public $table_sumber;

    public function __construct(){
      parent::__construct();
      $this->load->model('crud_m');
      $this->table_sumber = 'transaksi';
    }

    public function index(){
      $this->session->userdata('id');
      $this->load->view('link/header');
      $data['menunya'] = $this->crud_m->selectSemua($this->table_sumber);
    	$this->load->view('profile/myorder_v',$data);
      $this->load->view('link/footer');
		}
  }

?>
