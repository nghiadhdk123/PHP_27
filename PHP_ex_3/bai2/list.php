<?php 
	session_start();
	
	$students = $_SESSION;

	//session_destroy();


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

	<div class="container">
	<h2>Danh sách người dùng</h2>
	<a href="login.php" class="btn btn-primary">Thêm mới</a>

	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Mã Sinh Viên</th>
				<th>Họ tên</th>
				<th colspan="4">Action</th>
			</tr>
		</thead>
		<tbody>
				 <?php
				$i = 1; 
				foreach ($students as $key => $value) {
				?>
				<tr>
					<td> <?php echo $i; ?> </td>
					<td> <?php echo $value['msv']; ?> </td>
					<td> <?php echo $value['name']; ?> </td>
					<td><a href="detail.php?msv=<?= $value['msv'] ?>">Detail</a> | <a href="delete.php?msv=<?= $value['msv'] ?>">Delete</a> </td>
					
				</tr>
	
				<?php $i++; } ?> 

			
		</tbody>	

	</table>
	</div><!-- End container -->
</body>
</html>