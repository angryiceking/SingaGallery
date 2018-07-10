<?php 

class EntryModel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function login($user, $pass)
    {
        $query = $this->db->get_where('users', array('username' => $user, 'password' => $pass));
        return $query->row();
    }

    public function get_gallery()
    {
        $query = $this->db->get('gallery');
        return $query->result();
    }
}