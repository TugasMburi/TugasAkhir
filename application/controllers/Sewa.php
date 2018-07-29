<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Sewa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		
	}

	public function pinjam()
 	{
 		$this->load->library('form_validation');

 		$this->form_validation->set_rules('nama_dress','Nama Dress','trim|required');
 		$this->form_validation->set_rules('tgl_pinjam','Tanggal Pinjam','trim|required');
 		$this->form_validation->set_rules('tgl_kembali','Tanggal Kembali','trim|required');
 		$this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required');
 		if ($this->form_validation->run() == FALSE) {
 			$this->load->view('home/sewa');
 		} else {
 			$this->load->model('transaksi_model');
 			$this->transaksi_model->insert();
 			echo '<script>alert("Data berhasil disimpan")</script>';
 			redirect('home','refresh');
 		}
 	}

}

/* End of file Sewa.php */
/* Location: ./application/controllers/Sewa.php */

?>