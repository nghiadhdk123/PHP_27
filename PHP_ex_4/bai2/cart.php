<?php 
	session_start();
	if($_SESSION['cart']) {
		$SP = $_SESSION['cart'];
	};

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
	<table class = 'table'>
	<tr>
		<td colspan="3" align="center" style="font-size: 20px;font-weight: bold;">Danh sách sản phẩm</td>
		<td align="center"><a href="list.php" class="btn btn-warning">Tiếp Tục Mua Sắm</a></td>
	</tr>
	<tr style="font-weight: bold;">
		<td align="center">ID</td>
		<td align="center">Tên sản phẩm</td>
		<td align="center">Đơn giá</td>
		<td align="center">Số lượng</td>
		<td align="center">Thành tiền</td>
		<td align="center">Ảnh</td>
		<td align="center">#</td>
	</tr>
	<tbody>
		<?php
		$sum = 0;
		$TT = 0;
		foreach ($SP as $value) {
			$sum = $value['Gia']*$value['Soluong'];
			$TT += $sum;
			?>
			<tr>
				<td align="center"><?php echo $value['Masp']; ?></td>
				<td align="center"><?php echo $value['Tensp']; ?></td>
				<td align="center"><?php echo number_format($value['Gia']); ?></td>
				<td align="center">
					<a href="delete.php?Masp=<?=$value['Masp'] ?>" class="btn btn-danger">-</a>
					<?php echo $value['Soluong'] ?> 
					<a href="addcart.php?Masp=<?=$value['Masp']?>" class="btn btn-primary">+</a>
				</td>
				<td align="center">
					<?php echo $sum ?>
				</td>
				<td align="center">
					<img src=" <?php echo $value['img']?> " alt="" width='50px'; height='50px'>
				</td>
				<td align="center">
					<a href="delete.php?Masp=<?=$value["Masp"]?> " class="btn btn-primary" >
						Xóa Sản Phẩm
					</a>
				</td>
			</tr>
		<?php } ?>
		<tr>
			<th colspan="4" style="text-align: center;">Tổng Tiền : </th>
			<th colspan="1" style="text-align: center;"><?php echo $TT ?> </th> 
		</tr>
	</tbody>  
</table>
</body>
</html>