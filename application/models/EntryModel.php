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
        $query = $this->db->get_where('tbl_accts', array('user' => $user, 'pass' => $pass));
        return $query->row();
    }
}