<?php 
	require('data.php');
	session_start();
	if(isset($_GET['Masp'])) {
		$masp = $_GET['Masp'];
		// echo $masp;

		if(isset($_SESSION['cart'][$masp])) {
			$_SESSION['cart'][$masp]['Soluong']++;
		}else {
			$MSP = $SP[$masp];

			$MSP['Soluong'] = 1;

			$_SESSION['cart'][$masp] = $MSP;
		}

		 // echo "<pre>";
			// print_r($_SESSION);
		 // echo "</pre>";

		 header('Location: cart.php');
	}
	 //session_destroy();



 ?>