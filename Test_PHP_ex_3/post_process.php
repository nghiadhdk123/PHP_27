<?php 
	$user = $_POST['user'];
	$pass = $_POST['pwd'];

	if($user == 'admin' && $pass == 'admin') {
		echo "<br>Đăng nhập thành công";
	}else {
		echo "<br>Đăng nhập thất  bại";
	}

	echo "<br>User : " .$user;
	echo "<br>Pass : " .$pass;

 ?>