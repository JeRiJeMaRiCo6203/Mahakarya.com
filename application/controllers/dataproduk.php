<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class dataproduk extends CI_Controller{
  public function __construct(){
    parent::__construct();
  }

  public function index(){
    $this->load->view('dataproduk/dataproduk_v');
  }

  public function cetakpdf(){
    //load model
    $this->load->model('dataproduk_m');

    //execute
    $this->dataproduk_m->cetakpdf();
  }
}

?>
