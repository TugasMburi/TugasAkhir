<?php
class Report_barang extends CI_Model {
 
    public function get_barang()
	{
		$query = $this->db->get('barang');
		return $query->result_array();
	}
 
}
//
?>
