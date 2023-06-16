<?php
  /**
   *
   */
  class cart extends CI_Controller
  {
    public $tabel_sumber;
    public $tabel_bayangan;

    public function __construct(){
			parent::__construct();
      $this->load->model('crud_m');
      $this->tabel_sumber='keranjang';
      $this->tabel_bayangan='pengguna';


		}
    public function index(){
      $this->session->userdata('id');
      $this->load->view('link/header');
      $where = array('id_pengguna'=>$this->session->userdata('id'));
      $data['dataX'] = $this->crud_m->selectX($this->tabel_bayangan,$where);
      $data['menunya'] = $this->crud_m->selectSemua($this->tabel_sumber);
			$this->load->view('cart/cart_v', $data);
      $this->load->view('link/footer');
		}

    public function insert(){
      $this->load->view('link/header');
      //$this->load->view('menu/frmadd');
      $this->load->view('link/header');
    }

    function aksi_insert(){
      $jumlah = $this->input->post('f1');
      $hargav = $this->input->post('f2');
      $nama = $this->input->post('f3');
      $id_pengguna = $this->input->post('f4');
      $id_produk = $this->input->post('f5');

      $subtotal = $jumlah*$hargav;

      $data = array(
        "id_pengguna"=>$id_pengguna,
        "id_produk"=>$id_produk,
        "nama"=>$nama,
        "jumlah"=>$jumlah,
        "harga"=>$hargav,
        "subtotal"=>$subtotal,
      );

      $where = array('id_produk'=>$id_produk);
      $dataq = $this->crud_m->selectX('produk',$where);
      $datax = $dataq->row();
      $stokbaru = $datax->stok - $jumlah;
      $datau = array(
        "stok"=>$stokbaru
      );

      $this->crud_m->update_data('produk',$datau,$where);
      $this->crud_m->input_data($data, $this->tabel_sumber);
      redirect('cart');
}

   public function update($id_menu){
        $this->load->view('link/header');
        $where = array('id_menu'=>$id_menu);
        $data['menuX'] = $this->crud_m->selectX($this->tabel_sumber,$where);
        $this->load->view('menu/frmupdate',$data);
        $this->load->view('link/footer');

    }

    public function aksi_update(){
    $data = array(
      "nama"=>$this->input->post('f3'),
      "username"=>$this->input->post('f1'),
      "pass"=>$this->input->post('f2'),
      "no_tlp"=>$this->input->post('f4'),
      "alamat"=>$this->input->post('f5')
    );
  $where = array('id_pengguna'=>$this->input->post('fid'));
  $this->crud_m->update_data($this->tabel_bayangan,$data,$where);
  redirect('cart');
    }

    public function aksi_delete($id_keranjang){
        $where = array("id_keranjang"=>$id_keranjang);
        $this->crud_m->delete_data($this->tabel_sumber,$where);
  			//$this->menu_m->delete_data('menu',$where);
        redirect('cart');
    }

  }

?>
