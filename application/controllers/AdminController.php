<?php

class AdminController extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('AdminModel');
	}

	public function index()
	{
		$this->load_admin_template('index.php', null, null);
	}

	public function login()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$a = $this->AdminModel->login($user, $pass);

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
		$this->load_admin_template('dash.php', null, null);
	}
}