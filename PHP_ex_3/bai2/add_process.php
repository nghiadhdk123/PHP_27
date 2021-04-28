<?php 
	session_start();
			$data = array();
			$data['msv'] = $_POST['msv'];
			$data['name'] = $_POST['name'];
			$data['phone'] = $_POST['phone'];
			$data['mail'] = $_POST['mail'];
			$data['gender'] = $_POST['gender'];
			$data['add'] = $_POST['add'];
			
			// echo "<pre>";
			// 	print_r($data);
			// echo "</pre>";

			$_SESSION[$data['msv']] = $data;
			echo "<pre>";
				print_r($_SESSION);
			echo "</pre>";
			//session_destroy();
			header("Location: list.php")
			
		


	

 ?>