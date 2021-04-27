<?php 
	require_once('models/User.php');
	class UserController
	{
		var $model;

		function __construct()
		{
			$this->model = new User();
		}

		function add()
		{
			require_once('views/user/register.php');
		}

	 	function store()
		{	
			$data = $_POST;

	 		$lists = $this->model->create($data);

	 		if($lists)
			{
				setcookie('dktc','Đăng ký thành công',time()+10);
			}else{
				setcookie('dktb','Đăng ký thất bại',time()+10);

			}

	 		header('Location:index.php?admin=auth&mod=login&act=loginForm');
	 	}
	 }




 ?>