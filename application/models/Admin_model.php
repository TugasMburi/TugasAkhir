<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		
	}
	
	public function insert()
	{
		$data = array(
			'username' => $this->input->post('username'), 
			'fullname' => $this->input->post('fullname'), 
			'email' => $this->input->post('email'), 
			'password' => $this->input->post('password'),
			'level' => $this->input->post('level')
		);
		$this->db->insert('user', $data);
	}

	public function tampilUser()
	{
		$this->db->select('id, username, fullname, email, level');
		$this->db->from('user');
		$this->db->order_by('id', 'asc');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function delete($id) 
	{ 
        if ($this->db->delete("user", "id = ".$id)) 
        { 
        return true; 
       	} 
    }

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */

?>