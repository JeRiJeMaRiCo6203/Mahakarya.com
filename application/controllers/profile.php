<?php
  /**
   *
   */
   class profile extends CI_Controller
   {
     private $table_sumber = 'pengguna';
     public function __construct(){
       parent::__construct();
       $this->load->model('crud_m');
     }

     public function index(){
       $this->load->view('link/header');
       $where = array('id_pengguna'=>$this->session->userdata('id'));
       $data['dataX'] = $this->crud_m->selectX($this->table_sumber,$where);
 			 $this->load->view('profile/myaccount_v',$data);
       $this->load->view('link/footer');

 		}
      public function update($idX){
       $this->load->view('link/header');
       $where = array('id_pengguna'=>$idX);
       $data['dataX'] = $this->crud_m->selectX($this->table_sumber,$where);
       $this->load->view('profile/updatemyacc_v',$data);
       $this->load->view('link/footer');
       }


      public function aksi_update(){
      $data = array(
        "nama"=>$this->input->post('f1'),
        "no_telp"=>$this->input->post('f2'),
        "alamat"=>$this->input->post('f3'),
        "kota"=>$this->input->post('f4'),
        "kode_pos"=>$this->input->post('f5'),
        "email"=>$this->input->post('f6'),
        "password"=>$this->input->post('f7')
      );
    $where = array('id_pengguna'=>$this->input->post('fid'));
    $this->crud_m->update_data($this->table_sumber,$data,$where);
    redirect('profile');
      }
  }

?>
