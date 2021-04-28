<?php 
	session_start();
	if(isset($_GET['msv'])) {
		$student = $_GET['msv'];
		unset($_SESSION[$student]);
	}

	header('Location: list.php')

 ?>