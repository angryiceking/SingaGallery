<?php

class AdminModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function login($user, $pass)
	{
        // var_dump($user, $pass);ju1hkiij2jj
		$query = $this->db->get_where('users', array('username' => $user, 'password' => $pass, 'type' => 'admin'));
        // return $query;
		return $query->row();
	}
}