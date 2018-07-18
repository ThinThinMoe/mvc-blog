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
				$email = $_POST['email'];
				$pass = $_POST['password'];

				$this->model->userCreate($name,$email,$pass);
				flash('msg','User Registed Successfully !');
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
			$email = $_POST['email'];
			$pass = $_POST['password'];

			$user = $this->model->getByEmail($email);

			if ($user) {
				setSession('user_name',$user->name);
				setSession('user_id',$user->id);
				setSession('user_role',$user->role);
				redirect();
			} else {
				flash('msg','User or Password is incorrect !');
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