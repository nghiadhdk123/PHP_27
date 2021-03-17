<?php 
	session_start();

	if(isset($_GET['code'])) {
		$code = $_GET['code'];
	}

	if (isset($_SESSION['student'])) {
		$data = $_SESSION['student'][$code];
	}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>

 	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 </head>
 <body>
 	<h2 style="width: 100%;text-align: center;margin-bottom: 2%">Thông tin Sinh Viên</h2>
 	<ul>
 		<li>Mã Sinh Viên :  <?php echo $data['code'] ?> </li>
 	</ul>
 	<ul>
 		<li>Họ Tên :  <?php echo $data['name'] ?> </li>
 	</ul>
 	<ul>
 		<li>Số Điện thoại :  <?php echo $data['phone'] ?> </li>
 	</ul>
 	<ul>
 		<li>Email :  <?php echo $data['mail'] ?> </li>
 	</ul>
 	<ul>
 		<li>Địa Chỉ :  <?php echo $data['add'] ?> </li>
 	</ul>
 	<ul>
 		<li>Giới tính :  <?php echo $data['gt'] ?> </li>
 	</ul>

 	<a href="list.php" class="btn btn-primary" style="margin-left: 50%">Thoát</a>

 </body>
 </html>