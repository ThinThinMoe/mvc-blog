<?php 

class Controller
{
	public function model($model)
	{
		require_once ROOT.DS.'app'.DS.'models'.DS.$model.'.php';
		return new $model;
	}

	public function view($view, $data = [])
	{	
		$template = include ROOT.DS.'app'.DS.'views'.DS.$view.'.php';
		include ROOT.DS.'app'.DS.'views'.DS.'master.php';
	}
}