<?php

	class crud_m extends CI_model{

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
		function tampilsemuatbltransaksi(){
			$q="SELECT id, dt.id_transaksi, p.id_pengguna, p.nama as namaPengguna, t.tanggal, isi, t.status_transaksi
			FROM detail_transaksi as dt inner join transaksi as t ON t.id_transaksi=dt.id_transaksi inner join pengguna as p ON t.id_pengguna=p.id_pengguna";
			return $this->db->query($q);
		}

		function tampiltbltransaksi($idtransaksi){
			$q="SELECT id, dt.id_transaksi, p.id_pengguna, p.nama as namaPengguna, t.tanggal, isi, t.status_transaksi
			FROM detail_transaksi as dt inner join transaksi as t ON t.id_transaksi=dt.id_transaksi inner join pengguna as p ON t.id_pengguna=p.id_pengguna where id=";
			$qfix = $q.$idtransaksi;
			return $this->db->query($qfix);
		}

		function tableBelumBayar(){
			$q="SELECT id, id_pengguna, dt.id_transaksi,  t.tanggal, isi, t.status_transaksi
			FROM detail_transaksi as dt inner join transaksi as t ON t.id_transaksi=dt.id_transaksi where t.status_transaksi='Belum Bayar'";
			return $this->db->query($q);
		}

		function tablePembayaran(){
			$q="SELECT id_pembayaran, pem.id_transaksi, t.id_pengguna, peng.nama, isi, tanggal_pembayaran, bukti_pembayaran
			FROM pembayaran as pem inner join detail_transaksi as dt ON pem.id_transaksi=dt.id_transaksi inner join transaksi as t
			on t.id_transaksi=dt.id_transaksi inner join pengguna	as peng ON t.id_pengguna=peng.id_pengguna";
			return $this->db->query($q);
		}

		function dataChart(){
			$q="SELECT nama, stok FROM produk";
			return $this->db->query($q);
		}

		function getPembayaran($id){
			$q="SELECT id_transaksi
			FROM pembayaran
			WHERE id_transaksi=$id";
			return $this->db->query($q)->row();
		}

		function get_stok($tbl){
			$this->db->select('id_kategori, sum(stok) as jumlah');
			$this->db->from($tbl);
			$this->db->group_by('id_kategori');
			return $this->db->get()->result();
		}

		function get_jual(){
			$year=date('Y');
			$this->db->select('MONTH(tanggal_pembayaran) as bulan, sum(total) as total');
			$this->db->from("pembayaran as a");
			$this->db->join("transaksi as b","a.id_transaksi=b.id_transaksi");
			$this->db->group_by("MONTH(tanggal_pembayaran)");
			$this->db->where("status_transaksi != ","Belum Bayar");
			$this->db->where("YEAR(tanggal_pembayaran)",$year);
			return $this->db->get()->result();
		}

	}

?>
