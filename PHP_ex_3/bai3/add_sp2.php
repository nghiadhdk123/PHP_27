<?php
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	session_start();
	$gh = array(
		'SP01'=>array(
			'id' => 'SP01',
			'tensp' => 'Iphone 4 32GB',
			'dongia' => 5000000,
			'soluong' => 4234,
			'thoigian' =>NULL,
		),
		'SP02'=>array(
			'id' => 'SP02',
			'tensp' => 'Ipad Mini 16GB',
			'dongia' => 8000000,
			'soluong' => 4234243,
			'thoigian' =>NULL,
		),
		'SP03'=>array(
			'id' => 'SP03',
			'tensp' => 'Iphone 5 32GB',
			'dongia' => 3000000,
			'soluong' => 3234,
			'thoigian' =>NULL,
		),
		'SP04'=>array(
			'id' => 'SP04',
			'tensp' => 'Iphone 6 32GB',
			'dongia' => 10000000,
			'soluong' => 4234,
			'thoigian' =>NULL,
		),
	);
	
	$maCode = $_GET['id'];
	


	if (isset($_SESSION['code'][$maSP])) {
		// Tăng số lượng
		$_SESSION['code'][$maCode]['soluong']++;
		$_SESSION['code'][$maCode]['thoigian']= date('Y-m-d H:i:s');
	}else{
		// Chưa có trong giỏ hàng
		// B2: Lấy thông tin sản phẩm
		$gh = $gh[$maCode];
		$gh['soluong'] = 1;

		// B3: Add vào giỏ hàng
		$_SESSION['code'][$maCode]  = $gh;
		$_SESSION['code'][$maCode]['thoigian']  =  date('Y-m-d H:i:s');	
	}
	header('Location: add_mh.php');
?>