<?php 

class Comment extends Controller
{
	public function __construct()
	{
		$this->commentModel = $this->model('commentModel');
	}

	public function create()
	{
		$user_id = $_POST['user_id'];
		$post_id = $_POST['post_id'];
		$body = $_POST['body'];
		$this->commentModel->create($user_id, $post_id, $body);
		redirect("home/show/$post_id");
	}

	public function show($post_id)
	{
		$comments = $this->commentModel->show($post_id);
		showArray($comments);

	}
}