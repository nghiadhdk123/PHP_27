<?php 
	session_start();
	if(isset($_GET['id'])) {
		$student = $_GET['id'];
		unset($_SESSION[$student]);
	}

	session_destroy();

	header('Location: list.php')


 ?>