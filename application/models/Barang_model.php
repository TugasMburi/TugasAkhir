<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

	public function insert()
	{
		$data = array(
			'nama_barang' => $this->input->post('nama'), 
			'harga' => $this->input->post('harga'), 
			'stok' => $this->input->post('stok')
		);
		$this->db->insert('barang', $data);
	}

	public function getDataBarang()
	{
		$query = $this->db->get("barang");
		return $query->result_array();
	}


	public function tampilBarang()
	{
		$this->db->select('id_barang, nama_barang, harga, stok');
		$this->db->from('barang');
		$this->db->order_by('id_barang', 'asc');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function tampilBarangSewa()
	{
		$this->db->select('id_barang, nama_barang, harga, stok');
		$this->db->where('stok >', '0');
		$this->db->from('barang');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getBarang($id)
		{
			$this->db->where('id_barang', $id);
			$query = $this->db->get('barang');
			return $query->result();
		}

	public function updateById($id)
		{
			$data = array(
				'nama_barang' => $this->input->post('nama'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok'),
			);
			$this->db->where('id_barang', $id);
			$this->db->update('barang', $data);
		}

	public function delete($id) 
	{ 
        if ($this->db->delete("barang", "id_barang = ".$id)) 
        { 
        return true; 
       	} 
    }
}

/* End of file Barang_model.php */
/* Location: ./application/models/Barang_model.php */

?>