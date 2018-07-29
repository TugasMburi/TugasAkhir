<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('transaksi_model');
		if($this->session->userdata('logged_in')){
 			$session_data = $this->session->userdata('logged_in');
 			$data['username'] = $session_data['username'];
 			$data['level'] = $session_data['level'];
 			$current_controller = $this->router->fetch_class();
 			$this->load->library('acl');
 			if (! $this->acl->is_public($current_controller))
 			{
 				if (! $this->acl->is_allowed($current_controller, $data['level']))
 				{
 					echo '<script>alert("Anda Tidak Memiliki Hak Akses")</script>';
 					redirect('home','refresh');
 				}
 			}
 		}else{
 			redirect('login','refresh');
 		}
	}

	public function index()
	{
		$session_data=$this->session->userdata('logged_in');
 		$data['username']=	$session_data['username'];
		$data["list_transaksi"] = $this->transaksi_model->tampilTransaksi();
		$this->load->view('transaksi_view', $data);
	}

	public function update($id)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('transaksi_model');

		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		/*$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('tanggalLahir', 'Tgl Lahir', 'trim|required');*/

		$session_data=$this->session->userdata('logged_in');
 		$data['username']=	$session_data['username'];
 		$data['list_transaksi'] = $this->transaksi_model->tampilTransaksi();
		$data['transaksi'] = $this->transaksi_model->getTransaksi($id);

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('editTransaksi',$data);
		}
		else
		{
			$this->transaksi_model->update($id);
			$this->load->view('editTransaksiData', $data);
		}
	}

 	public function delete($id)
	{
		$this->load->helper("url");
		$this->load->model("transaksi_model");
		$this->transaksi_model->delete($id);

		redirect('transaksi');
	}
}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */

 ?>