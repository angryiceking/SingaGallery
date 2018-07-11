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
        // var_dump($user, $pass);
        $query = $this->db->get_where('users', array('username' => $user, 'password' => $pass));
        // return $query;
        return $query->row();
    }

    public function register($data)
    {
        // var_dump($data); exit();
        $query = $this->db->insert('users', $data);
        return true;
    }

    public function get_gallery()
    {
        $query = $this->db->get('gallery');
        return $query->result();
    }
}