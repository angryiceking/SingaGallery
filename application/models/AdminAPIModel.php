<?php

class AdminAPIModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get($from)
	{
		$query = $this->db->get($from);
		return $query->result();
	}

	public function insert($to, $data)
	{
		$query = $this->db->insert($to, $data);
	}

	public function edit($to, $data)
	{
		$query = $this->db->update($to, $data, array('id' => $data['id']));	
	}

	public function archive($to, $data)
	{
		$query = $this->db->update($to, $data, array('id' => $id));
	}
}