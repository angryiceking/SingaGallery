<?php

class GalleryModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function add_comment($data)
	{
		$query = $this->db->insert('comments', $data);
		// return $query;
	}

	public function add_like($data)
	{
		$query = $this->db->insert('likes', $data);
		return $query;
	}

	public function get_img_comments($id)
	{
		$sql = 'SELECT * FROM gallery a, comments b, users c WHERE a.id = b.art_id AND b.user_id = c.id AND a.id = '.$id;
		$result = $this->db->query($sql);
		return $result->result();
	}

	public function get_img_likes($id)
	{
		$sql = 'SELECT * FROM likes a, gallery b WHERE b.id = a.art_id AND a.art_id = '.$id;
		$result = $this->db->query($sql);
		return $result->result();
	}
}