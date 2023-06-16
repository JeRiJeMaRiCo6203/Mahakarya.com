<?php
class login_m extends CI_Model {

	public function cekLogin($username,$password) {
		$sql = "SELECT * FROM pengguna
				WHERE username = '$username' AND password = '$password'";
		return $this->db->query($sql);
	}

	function selectX($tbl,$where){
		return $this->db->get_where($tbl,$where);
	}

}

?>
