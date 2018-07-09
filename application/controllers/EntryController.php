<?php

class EntryController extends MY_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('EntryModel');
    }

    public function index()
    {
        $this->load_template('index.php', null, null);
    }

    public function login()
    {
        $user = $this->input->post('log_user');
        $pass = $this->input->post('log_pass');
        $a = $this->EntryModel->login($user, $pass);
        $data = [
            'user' => $a['user'],
            'name' => $a['name'],
            'type' => $a['type']
        ];
        $this->session->set_userdata($data);
        // var_dump($a);
        // redirect('login');
    }
}