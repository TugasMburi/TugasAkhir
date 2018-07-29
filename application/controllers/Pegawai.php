<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Pegawai extends CI_Controller {
 
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('admin_model');
 	}

 	public function Index()
 	{
		$data2['list_user'] = $this->admin_model->tampilUser();
 		$this->load->view('loginAdmin',$data2);
 	}
 
 }
 
 /* End of file Pegawai.php */
 /* Location: ./application/controllers/Pegawai.php */ ?>