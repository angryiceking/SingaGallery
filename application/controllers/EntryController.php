<?php

class EntryController extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('EntryModel');
    }

    public function reset()
    {
        $this->session->sess_destroy();
        redirect('');
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

        // var_dump($this->input->post()); exit();
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $a = $this->EntryModel->login($user, $pass);

        // var_dump($a); exit();
        if ($a) {
            $data = [
                'user' => $a->username,
                'name' => $a->nickname,
                'type' => $a->type,
                'email' => $a->email,
                'is_signed' => true
            ];

            $this->session->set_userdata($data);

            // redirect('');
            echo $a->nickname;
        }
    }

    public function register()
    {
        $data = array(
            'username' => $this->input->post('reg_username'),
            'password' => $this->input->post('reg_password'),
            'nickname' => $this->input->post('nickname'),
            'email' => $this->input->post('reg_email'),
            'type' => 'user',
        );

        $reg = $this->EntryModel->register($data);

        if ($reg) {
            $data = [
                'user' => $this->input->post('reg_username'),
                'name' => $this->input->post('nickname'),
                'email' => $this->input->post('reg_email'),
                'type' => 'user',
                'is_signed' => true
            ];
        }

        $this->session->set_userdata($data);

        redirect('');
    }
}