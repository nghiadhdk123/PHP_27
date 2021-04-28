<?php 
	session_start();
	if(isset($_POST['user']))
	{
		$user = $_POST['user'];
	}

	if(isset($_POST['pwd']))
	{
		$pass = $_POST['pwd'];
	}


	if($user == 'admin' && $pass == "admin") {
		$_SESSION['exits_login'] = 1;
		header('Location: home_page.php');
	}else {
		setcookie('no_exits_status',1,time()+5);
		header('Location: login.php');
	}

 ?>