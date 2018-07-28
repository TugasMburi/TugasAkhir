<?php
	 defined('BASEPATH') OR exit('No direct script access allowed');
	 
	 class User extends CI_Model
	 {
	 	public function login($username,/*$email,*/$password)
	 	{
	 		$this->db->select('id,username,email,password,level');
	 		$this->db->from('user');
	 		$this->db->where('username',$username);
	 		/*$this->db->where('email', $email);*/
	 		$this->db->where('password', MD5($password));
	 		$query = $this->db->get();
	 		if($query->num_rows()==1){
	 			return $query->result();
	 		}else{
	 			return false;
	 		}
	 		
	 	}
	 
	 	public function insert()
	 	{
	 		$data = array(
	 			'username' => $this->input->post('username'),
	 			'fullname' => $this->input->post('fullname'),
	 			'email' => $this->input->post('email'),
	 			'password' => md5($this->input->post('password')),
	 			'level' => $this->input->post('level')
	 		);
	 		$this->db->insert('user',$data);
	 	}

	 	public function insert_user($data, $table)
	 	{
	 		$this->db->insert($table, $data);
	 	}
	 }

	 
	 /* End of file user.php */
	 /* Location: ./application/models/user.php */ ?>