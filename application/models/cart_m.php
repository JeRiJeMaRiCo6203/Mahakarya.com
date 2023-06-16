<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cart_m extends CI_Model {
	public function all(){
		//query semua record di table
		$hasil = $this->db->get('produk');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return array();
		}
	}
	public function find($id){
		//query mencari record berdasarkan ID-nya
		$hasil = $this->db->where('id_produk', $id)
							->limit(1)
							->get('produk');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}
	public function create($data_products){
		//query insert into
		$this->db->insert('produk', $data_products);
	}
	public function update($id, $data_products){
		$this->db->where('id_produk', $id)
				->update('produk', $data_products);
	}
	public function delete($id){
		//query delete
		$this->db->where('id_produk', $id)
				->delete('produk');
	}
}
