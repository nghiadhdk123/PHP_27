<?php 

	session_start();

	if (isset($_SESSION['student'])) {
		$dataArray = $_SESSION['student'];
	} else {
		$dataArray = array();
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

	<div class="container">
	<h2>Danh sách người dùng</h2>
	<a href="index2.php" class="btn btn-primary">Thêm mới</a>

	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Mã Sinh Viên</th>
				<th>Họ tên</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$i =0;
				foreach ($dataArray as  $value) {
					$i++;
			 ?>

			 <tr>
			 	<td> <?php echo $i; ?> </td>
			 	<td> <?php echo $value['code']; ?> </td>
			 	<td> <?php echo $value['name']; ?> </td>
			 	<td>	
			 	<a href="detail.php?code=<?php echo $value['code']; ?>" class ="btn btn-primary">Detail</a>
			 	<a href="delete.php?code=<?php echo $value['code']; ?>" class ="btn btn-primary">Delete</a>
			 </td>
			 </tr>	

			<?php } ?>
		</tbody>	

	</table>
	</div><!-- End container -->
</body>
</html>