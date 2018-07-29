<?php
class Report_transaksi extends CI_Model {
 
    public function get_transaksi()
	{
		$query = $this->db->get('transaksi');
		return $query->result_array();
	}
 
}
?>