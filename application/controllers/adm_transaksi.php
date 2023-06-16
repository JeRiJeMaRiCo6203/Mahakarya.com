<?php
  class adm_transaksi extends CI_Controller
  {
    public $table_sumber;
    public $table_relasi;

		public function __construct(){
			parent::__construct();


			$this->load->model('crud_m');
      $this->table_sumber = 'detail_transaksi';
      $this->table_relasi ="select id, a.id_transaksi, b.id_pengguna, b.tanggal, isi, b.status_transaksi from detail_transaksi as a inner join transaksi as b on b.id_transaksi=a.id_transaksi";
		}
    public function index(){
      $this->load->view('link/menu_admin');
			$this->load->view('link/nav_admin');
    	$data['datanya'] = $this->crud_m->tampilsemuatbltransaksi();
			$this->load->view('admin/penjualan_v', $data);
		}

   public function update(){
			  $this->load->view('link/menu_admin');
			  $this->load->view('link/nav_admin');
        $where = $this->input->get('idtransaksi');
        $data['selectX'] = $this->crud_m->tampiltbltransaksi($where);
        $this->load->view('admin/updatepenjualan_v',$data);
    }

    public function aksi_update(){
      $data = array(
        "status_transaksi"=>$this->input->post('f2')
      );
      $where = array('id_transaksi'=>$this->input->post('fid'));
      $this->crud_m->update_data('transaksi',$data,$where);
      redirect('adm_transaksi');
    }

    public function payment(){
      $this->load->view('link/menu_admin');
			$this->load->view('link/nav_admin');
    	$data['datanya'] = $this->crud_m->tablePembayaran();
			$this->load->view('admin/datapembayaran_v', $data);
    }

  }

?>
