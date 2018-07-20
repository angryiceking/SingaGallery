<?php

class AdminController extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model(array('AdminModel', 'AdminAPIModel'));
	}

	public function index()
	{

		$this->load_admin_login_template('index.php', null, null);
	}

	public function dash()
	{
		$data = array(
			'blogs' => $this->AdminAPIModel->get('blogs'),
			'events' => $this->AdminAPIModel->get('events'),
			'gallery' => $this->AdminAPIModel->get('gallery'),
			);
		$this->load_admin_template('dash.php', $data, null);
	}

	public function login()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$a = $this->AdminModel->login($user, $pass);

		// var_dump($a); exit();

		if ($a != null) {
			$data = [
			'id' => $a->id,
			'user' => $a->username,
			'name' => $a->nickname,
			'type' => $a->type,
			'email' => $a->email,
			'is_signed' => true
			];

			$this->session->set_userdata($data);

			echo "true";
		}
		else {
			echo "false";
		}

	}
}