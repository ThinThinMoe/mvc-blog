<?php

class Post extends Controller
{

    public function __construct()
    {
        $this->postModel     = $this->model('postModel');
        $this->categoryModel = $this->model('categoryModel');
        $this->userModel     = $this->model('userModel');
        $this->commentModel = $this->model('commentModel');
    }

    public function index()
    {
        $data = $this->postModel->showByUserId(getSession('user_id'));
        $this->view('admin/post/list', $data);
    }

    public function show($id)
    {
        $data = $this->postModel->showSingle($id);

        $category = $this->categoryModel->show($data->category_id);

        $user = $this->userModel->show($data->user_id);

        $data->category = $category->name;
        $data->user = $user->name;

        $data->comments = $this->commentModel->show($data->id);

        for ($i=0; $i < count($data->comments); $i++) { 
            $data->comments[$i]->user = $this->userModel->show($data->comments[$i]->user_id)->name;
        }
        
        $this->view('admin/post/detail',$data);
    }

    public function create()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title       = $_POST['title'];
            $category_id = $_POST['category_id'];
            $user_id     = getSession('user_id');
            $content     = $_POST['content'];

            $this->postModel->create($title, $category_id, $user_id, $content);
            flash('alert', 'Created new post successfully!');
            redirect('post');
        } elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $data = $this->categoryModel->show();
            $this->view('admin/post/create', $data);
        }
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title       = $_POST['title'];
            $category_id = $_POST['category_id'];
            $user_id     = getSession('user_id');
            $content     = $_POST['content'];

            $this->postModel->edit($id, $title, $category_id, $user_id, $content);
            flash('alert', 'Updated a post successfully!');
            redirect('post');
        } elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $data = $this->postModel->showByPostId($id);
            $categories = $this->categoryModel->show();
            $data->categories = $categories;
            $this->view('admin/post/edit', $data);
        }
    }

    public function delete($id)
    {
        $this->postModel->delete($id);
        flash('alert','Deleted post Successfully !');
        redirect('post');
    }

}

