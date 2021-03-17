<?php 
	 session_start();

	 if (isset($_POST['msv'])) {
	 		$code = $_POST['msv'];
	 		$name = $_POST['name'];
	 		$mail = $_POST['mail'];
	 		$phone = $_POST['phone'];
	 		$add = $_POST['add'];
	 		$gt = $_POST['gender'];

	 		$_SESSION['student'][$code] = array(
	 			'code' => $code,
	 			'name' => $name,
	 			'mail' => $mail,
	 			'phone' => $phone,
	 			'add' => $add,
	 			'gt' => $gt,
	 		);

	 		echo print_r($_SESSION);

	 		header('Location: list.php');
	 }

	  

 ?>