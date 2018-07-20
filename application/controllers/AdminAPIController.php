<?php

class AdminAPIController extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('AdminAPIModel');
	}

	// BLOG APIS
	public function add($table)
	{
		$data = array(

			);

		$this->AdminAPIModel->insert($table, $data);
	}

	public function edit($table)
	{
		$data = array(

			'status' => '',
			'status_date' => date('M-d-Y')
			);

		$this->AdminAPIModel->edit($table, $data);	
	}

	public function archive($table)
	{
		
		$data = array(

			'status' => 'archived',
			'status_date' => date('M-d-Y')
			);
		$this->AdminAPIModel->archive($table, $data);
	}
}