<?php 

class Home extends Controller
{
	public function index($data)
	{    
		$this->view('home/index',$data);
	}

	public function list()
	{
		# code...
	}
	public function show($value='')
	{
		# code...
	}
}