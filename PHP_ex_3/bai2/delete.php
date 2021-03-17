<?php 
		session_start();
		if (isset($_GET['code'])) {
			$code = $_GET['code'];

			unset($_SESSION['student'][$code]);
			
		}
		
		header("Location: list.php");




 ?>