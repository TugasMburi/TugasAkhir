<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Admin extends CI_Controller {
 
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('admin_model');
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

 	public function Index()
 	{
 		$session_data=$this->session->userdata('logged_in');
 		$data['username']=	$session_data['username'];
 		$data['list_user'] = $this->admin_model->tampilUser();
 		$this->load->view('loginAdmin',$data);
 	}
 
 	public function register()
 	{
 		$this->load->library('form_validation');

 		$this->form_validation->set_rules('username','Username','trim|required');
 		$this->form_validation->set_rules('fullname','Full Name','trim|required');
 		$this->form_validation->set_rules('email', 'E-mail', 'trim|required');
 		$this->form_validation->set_rules('password','Password','trim|required');
 		$this->form_validation->set_rules('level','Level','trim|required');
 		if ($this->form_validation->run() == FALSE) {
 			$session_data=$this->session->userdata('logged_in');
 			$data['username']=	$session_data['username'];
 			$this->load->view('tambah_user_admin_view', $data);
 		} else {
 			$this->load->model('user');
 			$this->user->insert();
 			echo '<script>alert("Data berhasil disimpan")</script>';
 			redirect('admin','refresh');
 		}
 	}

 	public function delete($id)
	{
		$this->load->helper("url");
		$this->load->model("admin_model");
		$this->admin_model->delete($id);

		redirect('admin');
	}
	public function update($id)
	{
		$session_data=$this->session->userdata('logged_in');
 		$data['username']=	$session_data['username'];
 		$data['list_user'] = $this->admin_model->tampilUser();
 		$this->load->view('editAdmin',$data);
	}
 }
 
 /* End of file Pegawai.php */
 /* Location: ./application/controllers/Pegawai.php */ ?>