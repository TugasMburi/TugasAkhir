<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {
	public function tampilTransaksi()
	{
		$this->db->select('id_transaksi, nama_penyewa, tgl_pinjam, tgl_kembali, jumlah, (jumlah*barang.harga) as harga_sewa');
		$this->db->from('transaksi');
		$this->db->join('barang', 'barang.id_barang = transaksi.fk_barang');
		$this->db->order_by('id_transaksi', 'asc');
		$query = $this->db->get();
		return $query->result_array();
	}	

	public function getDataTransaksi()
	{
		$query = $this->db->get("transaksi");
		return $query->result_array();
	}

	public function getTransaksi($id)
		{
			$this->db->where('id_transaksi', $id);
			$query = $this->db->get('transaksi');
			return $query->result();
		}

	public function insert()
	{
		$data = array(
			'nama_penyewa' => $this->input->post('nama'),
			'fk_barang' => $this->input->post('nama_dress'), 
			'tgl_pinjam' => $this->input->post('tgl_pinjam'), 
			'tgl_kembali' => $this->input->post('tgl_kembali'),
			'jumlah' => $this->input->post('jumlah')
		);
		$this->db->insert('transaksi', $data);
	}

	public function update($id)
		{
			$data = array(
				'nama_penyewa' => $this->input->post('nama'),
				'tgl_pinjam' => $this->input->post('tglpinjam'),
				'tgl_kembali' => $this->input->post('tglkembali'),
				'jumlah' => $this->input->post('jumlah'),
			);
			$this->db->where('id_transaksi', $id);
			$this->db->update('transaksi', $data);
		}

	public function delete($id) 
	{ 
        if ($this->db->delete("transaksi", "id_transaksi = ".$id)) 
        { 
        return true; 
       	} 
    }
}

/* End of file Transaksi_model.php */
/* Location: ./application/models/Transaksi_model.php */

 ?>