<?php 

class User extends Controller
{
	private $model;

	public function __construct()
	{
		$this->model = $this->model('userModel');
	}

	public function index()
	{
		redirect();
	}

	public function register()
	{
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$name = $_POST['name'];
				$pass = $_POST['password'];
				$this->model->userCreate($name,$pass);
				Config::set('msg','User Registed Successfully !');
				redirect('user/login');
			}elseif ($_SERVER['REQUEST_METHOD'] == 'GET' && getSession('user_name') == null) {
				$this->view('user/register');
			}else{
				redirect();
			}

	}

	public function login()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$name = $_POST['name'];
			$pass = $_POST['password'];
			$user = $this->model->getByName($name);

			if ($user) {
				setSession('user_name',$user->name);
				redirect();
			} else {
				Config::set('msg','User or Password is incorrect !');
				$this->view('user/login');
			}
			
		}elseif ($_SERVER['REQUEST_METHOD'] == 'GET' && getSession('user_name') == null) {
			$this->view('user/login');
		}else{
			redirect();
		}
	}

	function logout()
	{
		destroySession();
		redirect();
	}

}