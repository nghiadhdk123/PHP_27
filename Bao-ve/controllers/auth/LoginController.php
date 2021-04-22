<?php 

	require_once('controllers/BaseController.php');
	require_once('models/User.php');
	//session_destroy();
	class LoginController extends BaseController
	{
		public function loginForm()
		{
		if(!empty($_SESSION['auth']))
			{
				return $this->redirect('?admin=admin&mod=post&act=admin');
				// header("Location: views/admin/admin.php");
			}
		return $this->view('views/auth/login');
		}
		public function login()
		{
			$data = $_POST;

			$modelUser = new User();
			$user = $modelUser->all();
			foreach ($user as $value) {
				if($value['email'] == $data['email'] && $value['password'] == $data['password']){
					$_SESSION['auth'] = $value;
					return $this->redirect('?admin=admin&mod=post&act=admin');
					// header("Location: views/admin/admin.php");
				}
			}
			$_SESSION['error'] = 'Loi Dang Nhap';
			return $this->back();
		}
	}



 ?>