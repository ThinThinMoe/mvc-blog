<?php 

class Category extends Controller
{	
	private $model;

	public function __construct()
	{
		$this->model = $this->model('categoryModel');
	}

	public function index()
	{
		$data = $this->model->show();
		$this->view('admin/category/list', $data);
	}

	public function create()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$name = $_POST['name'];
			$remark = $_POST['remark'];
			$this->model->create($name, $remark);
			flash('alert','Created new category successfully!');
			redirect('category');
		}elseif ($_SERVER['REQUEST_METHOD'] == 'GET'){
			$this->view('admin/category/create');
		}
	}

	public function edit($id)
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$name = $_POST['name'];
			$remark = $_POST['remark'];
			$this->model->edit($id, $name, $remark);
			flash('alert','Updated Category Successfully !');
			redirect('category');
		}elseif ($_SERVER['REQUEST_METHOD'] == 'GET'){
			$data = $this->model->show($id);
			$this->view('admin/category/edit', $data);
		}
		$this->view('admin/category/edit');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		flash('alert','Deleted Category Successfully !');
		redirect('category');
	}
}