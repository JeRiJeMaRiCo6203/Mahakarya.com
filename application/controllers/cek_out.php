<?php
  /**
   *
   */
  class cek_out extends CI_Controller
  {
    public $tabel_sumber;
    public $tabel_bayangan;

    public function __construct(){
			parent::__construct();
      $this->load->model('crud_m');
      $this->tabel_sumber='transaksi';
      $this->tabel_bayangan='pengguna';

		}
    public function index(){
      $this->session->userdata('id');
      $this->load->view('link/header');
      $where = array('id_pengguna'=>$this->session->userdata('id'));
      $data['dataX'] = $this->crud_m->selectX($this->tabel_bayangan,$where);
      $data['menunya'] = $this->crud_m->selectX($this->tabel_sumber, $where);
			$this->load->view('transaksi/konfirmasibayar_v', $data);
      $this->load->view('link/footer');
		}

    function aksi_insert(){
    $id_pengguna = $this->input->post('f11');
    $total = $this->input->post('f9');
    $status_transaksi = $this->input->post('f10');
    //$tanggal= $this->input->post('f12');
    $data = array(
      "id_pengguna"=>$id_pengguna,
      "total"=>$total,
      "status_transaksi"=>$status_transaksi,
      "tanggal"=>date("Y-m-d H:i:s"),
    );
    if($total == 0) {
        redirect('home');
    } else {
        $this->crud_m->input_data($data, $this->tabel_sumber);
        redirect('konfirmasi');
    }

}

  }

?>
