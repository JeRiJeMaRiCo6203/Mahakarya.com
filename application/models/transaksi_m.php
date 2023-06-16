<?php

	class transaksi_m extends CI_model{

    public function selectSemua($tbl){
			return $this->db->get($tbl);//nama tabel
		}

		function input_data($data, $tbl){
			$this->db->insert($tbl,$data);
		}

    function selectX($tbl,$where){
			return $this->db->get_where($tbl,$where);
		}

    function update_data($tbl,$data,$where){
      $this->db->where($where);
			$this->db->update($tbl,$data);
		}

    function delete_data($tbl,$where){
      $this->db->delete($tbl,$where);
    }

		function addressDetail(){
			$id_produk = $_GET['id'];
			$q = "SELECT id_pengguna, nama, alamat FROM pengguna where id_pengguna=".$id_pengguna;
			return $this->db->query($q);
		}

		function tableTransactions(){
			$q="SELECT t.id_transaksi, p.id_pengguna, p.nama as namaPengguna,t.tanggal, pr.id_produk, pr.nama as namaProduk, pr.harga, t.status_transaksi
			FROM transaksi as t inner join produk as pr ON t.id_produk=pr.id_produk inner join pengguna as p ON t.id_pengguna=p.id_pengguna";
			return $this->db->query($q);
		}
	}

?>
