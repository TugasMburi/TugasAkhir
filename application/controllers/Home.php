<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('barang_model');
		if($this->session->userdata('logged_in') == null){
			redirect('Login','refresh');
		}


	}
	public function index()
	{
		$session_data=$this->session->userdata('logged_in');
 		$data['username']=	$session_data['username'];  
 		$data['list_barang'] = $this->barang_model->tampilBarang();
		$this->load->view('home_view_logged_in_user', $data);
	}
	
	public function sewa()
	{
		$session_data=$this->session->userdata('logged_in');
 		$data['username']=	$session_data['username'];  
 		$data['list_barang'] = $this->barang_model->tampilBarangSewa();
		$this->load->view('sewa_view', $data);
	}
}
