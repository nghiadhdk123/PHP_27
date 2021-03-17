<?php
	session_start();
	$cart = array(
		'SP1' => array(
			'id' => 'SP01',
			'tsp' => 'Iphone5 32G',
			'dg' => 500000,
			'sl' => 5,
		),

		'SP2' => array(
			'id' => 'SP02',
			'tsp' => 'Iphone6 32G',
			'dg' => 700000,
			'sl' => 5,
		),

		'SP3' => array(
			'id' => 'SP03',
			'tsp' =>'Iphone6 plus 32G',
			'dg' => 800000,
			'sl' => 5,
		),

		'SP4' => array(
			'id' => 'SP04',
			'tsp' => 'Iphone Mini',
			'dg' => 300000,
			'sl' => 5,
		),
	);

	$maCode = $_GET['id'];

	if(isset($_SESSION['cartsp'][$maCode])) {
		$_SESSION['cartsp'][$maCode]['sl']++;
	} else {
		$cart = $cart[$maCode];
		$cart['sl'] = 1;
		$_SESSION['cartsp'][$maCode] = $cart; 
	}

	header('Location: add_sp.php');

 ?>