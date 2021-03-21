<?php 
	session_start();
	if(isset($_GET['Masp'])) {
		$MSP = $_GET['Masp'];
	}

	if($_SESSION['cart'][$MSP]['Soluong'] > 1)
	{
		$_SESSION['cart'][$MSP]['Soluong']--;
	}else {
		unset($_SESSION['cart'][$MSP]);
	}

	header('Location: cart.php')

 ?>