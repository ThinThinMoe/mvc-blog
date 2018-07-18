<?php

class Home extends Controller
{
    public function __construct()
    {
        $this->postModel     = $this->model('postModel');
        $this->categoryModel = $this->model('categoryModel');
        $this->userModel     = $this->model('userModel');
    }

    public function index()
    {
        $posts     = $this->postModel->show();
        $categorys = $this->categoryModel->show();
        $this->view('home/list', [$posts, $categorys]);
    }

    public function show($id)
    {
        redirect("post/show/$id");
    }

    public function cat($id)
    {
        $posts     = $this->postModel->cat($id);
        $categorys = $this->categoryModel->show();
        $this->view('home/list', [$posts, $categorys]);

    }

    public function test()
    {
    	$this->view('home/test');
    }
}
