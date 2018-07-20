<?php

class GalleryController extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('GalleryModel');
	}

	public function get($id)
	{
		$comment = array(
			'comment' => $this->GalleryModel->get_img_comments($id),
			);
		$this->load_page_part('comment.php', $comment, null);
	}

	public function get_likes($id)
	{
		$comment = $this->GalleryModel->get_img_likes($id);
		$a = 0;
		foreach ($comment as $key) {
			$a++;
		}

		echo $a;
	}

	public function comment()
	{
		$data = array(
			'art_id' => $this->input->post('id'),
			'user_id' => $this->input->post('user'),
			'comment' => $this->input->post('comment'),
			'time_log' => date('Y-m-d h:i:s')
			);
		// var_dump($data); exit();
		$add = $this->GalleryModel->add_comment($data);

		return $add;
	}

	public function like()
	{
		$data = array(
			'art_id' => $this->input->post('artid'),
			'user_id' => $this->input->post('userid')
			);
		// var_dump($data);
		$add = $this->GalleryModel->add_like($data);
	}

	public function unlike()
	{
		$data = array(
			'art_id' => $this->input->post('artid'),
			'user_id' => $this->input->post('userid')
			);
		// var_dump($data);
		$add = $this->GalleryModel->unlike($data);
	}

	public function check_if_liked()
	{
		$id = $this->input->post('user_id');
		$art_id = $this->input->post('art_id');
		$data = array(
			'user_id' => $id,
			'art_id' => $art_id
			);
		$check = $this->GalleryModel->check_if_liked($data);
		if ($check != null) {
			echo "cannot like again";
		}
		else {
			echo "can like";
		}
	}
}