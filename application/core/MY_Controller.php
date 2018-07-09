<?php

class MY_Controller extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
    }

    public function load_template($page, $data, $title, $message=null)
    {
        $this->load->view('parts/head.php', $data);
        $this->load->view('pages/'.$page);
        $this->load->view('parts/foot.php', $data);
    }
}