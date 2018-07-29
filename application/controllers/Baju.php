<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Baju extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('barang_model');
	}

	public function index()
	{
 		$data['list_barang'] = $this->barang_model->tampilBarang();
		$this->load->view('home_view_logged_out', $data);
	}

}

/* End of file Controllername.php */

?>