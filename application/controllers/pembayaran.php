<?php

  class pembayaran extends CI_Controller{

    public $table_sumber;

    public function __construct(){
      parent::__construct();
      $this->load->model('crud_m');
      $this->table_sumber = 'pembayaran';
    }

    public function index(){
      $this->load->view('link/header');
			$data['menunya'] = $this->crud_m->tableBelumBayar($this->table_sumber);
			$this->load->view('profile/pembayaran_v',$data);
      $this->load->view('link/footer');
    }

    public function insert(){
      $this->load->view('home/insertpembayaran_v');
    }

    function aksi_insert(){
        $id_transaksi = $this->input->post('id_transaksi');
        $tanggal_pembayaran = date('Y-m-d H:i:s');
        $config['upload_path'] = './assets/images/pembayaran/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name'] = time().'_'.$_FILES['featured_image']['name'];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);


        $id_trx = $this->crud_m->getPembayaran($id_transaksi);
        //if($id_trx != NULL){
          if($this->upload->do_upload('featured_image')){
            $image = $this->upload->data();
            $namefile = $image['file_name'];
            $where = array('id_pengguna'=>$this->session->userdata('id'));
            $data = $this->crud_m->selectX('keranjang',$where);
            $total=0;
            $isi="";
            foreach ($data->result() as $value) {
              $isi .= $value->nama.", Jumlah = ". $value->jumlah.", Subtotal = ".$value->subtotal."<br>" ;
              $total+=$value->subtotal;
            }
            $isifix = $isi . "<br>Total = ".$total;
            $data1 = array(
              "id_transaksi"=>$id_transaksi,
              "isi"=>$isifix
            );
            $this->crud_m->input_data($data1, 'detail_transaksi');
            $where = array("id_pengguna"=>$this->session->userdata('id'));
            $this->crud_m->delete_data('keranjang',$where);
            $data = array(
              "id_transaksi"=>$id_transaksi,
      				"tanggal_pembayaran" => $tanggal_pembayaran,
              "bukti_pembayaran"=>$namefile
            );
            $this->crud_m->input_data($data, $this->table_sumber);
            $this->session->set_flashdata(array('status'=>TRUE,'msg'=>'The Proof of Payment Has Succesfully Saved'));
          } else {
            $this->session->set_flashdata(array('status'=>FALSE,'msg'=>'The Proof of Payment Has Failed to Saved'));
          }
        //} else {
          //$this->session->set_flashdata(array('status'=>FALSE,'msg'=>'The Proof of Payment is Failed to Saved'));
        //}
        redirect('cek_out');
        }

  }

?>
