<?php
class chart_m extends CI_Model {
	public function ambilChart()
	{
		$sql = "SELECT nama,stok FROM produk";
		return $this->db->query($sql);
	}
}
?>
