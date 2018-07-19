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

    public function load_admin_login_template($page, $data, $title, $message=null)
    {
        // $this->load->view('pages/admin/temp/head.php', $data);
        $this->load->view('pages/admin/'.$page);
        $this->load->view('pages/admin/temp/foot.php', $data);
    }

    public function load_admin_template($page, $data, $title, $message=null)
    {
        $this->load->view('pages/admin/temp/head.php', $data);
        $this->load->view('pages/admin/'.$page);
        $this->load->view('pages/admin/temp/foot.php', $data);
    }

    public function load_page_part($page, $data, $message=null)
    {
        $this->load->view('pages/page_part/'.$page, $data);
    }
}