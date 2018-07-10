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
        $data = array(
            'gallery' => $this->EntryModel->get_gallery()
        );
        $this->load_template('index.php', $data, null);
    }

    public function login()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $a = $this->EntryModel->login($user, $pass);

        if ($a != null) {
            $data = [
                'user' => $a['username'],
                'name' => $a['nickname'],
                'type' => $a['type'],
                'img' => $a['img'],
                'email' => $a['email'],
                'contact' => $a['contact'],
                'is_signed' => true
            ];

            $this->session->set_userdata($data);

            redirect('index');
        }
    }
}