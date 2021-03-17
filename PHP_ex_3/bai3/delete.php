<?php
	session_start();
	$maCode = $_GET['id'];



	if($_SESSION['code'][$maCode]['soluong'] > 1){
		
		$_SESSION['code'][$maCode]['soluong']--;
		
	}else{
		// Bước 2: Xóa sản phẩm khỏi giỏ hàng
		unset($_SESSION['code'][$maCode]);
	}

	header('Location: add_mh.php')
?>