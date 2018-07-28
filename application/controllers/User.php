<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class User extends CI_Controller {
 
 	public function __construct()
 	{
 		parent::__construct();
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
 					redirect('login/logout','refresh');
 				}
 			}
 		}else{
 			redirect('login','refresh');
 		}
 	}

 	public function Index()
 	{
 		$session_data=$this->session->userdata('logged_in');
 		$data['username']=$session_data['username'];
 		$this->load->view('home_view_logged_in_user',$data);
 	}

 	public function create()
	{
		$this->load->model('user');
		$this->load->helper('url');

		$username = $this->input->post('username');
		$fullname = $this->input->post('fullname');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$level = $this->input->post('level');

		$data = array (
			'username' => $username,
			'fullname' => $fullname,
			'email' => $email,
			'password' => md5($password),
			'level' => $level
		);
		$this->user->insert_user($data, 'user');
		
	}
 
 }
 
 /* End of file Pegawai.php */
 /* Location: ./application/controllers/Pegawai.php */ ?>