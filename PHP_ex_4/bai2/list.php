<?php
	require('data.php');
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
		<td align="center"><a href="addgiohang.php" class="btn btn-warning">Xem giỏ hàng</a></td>
	</tr>
	<tr style="font-weight: bold;">
		<td align="center">ID</td>
		<td align="center">Tên sản phẩm</td>
		<td align="center">Đơn giá</td>
		<td align="center">Số lượng</td>
		<td align="center">Ảnh</td>
		<td align="center">#</td>
	</tr>
	<tbody>
		<?php
		$i = 0;
		foreach ($SP as $value) {
			$i++;

			?>
			<tr>
				<td align="center"><?php echo $value['Masp']; ?></td>
				<td align="center"><?php echo $value['Tensp']; ?></td>
				<td align="center"><?php echo number_format($value['Gia']); ?></td>
				<td align="center"><?php echo $value['Soluong'] ?> </td>
				<td align="center"><img src =" <?php echo $value['img'] ?> " style='width: 50px ; height: 50px'></a></td>
				<td align="center">
					<a href="addcart.php?Masp=<?=$value["Masp"]?> " class="btn btn-primary" >
						Add to cart
					</a>
				</td>
			</tr>
		<?php } ?>
	</tbody>  
</table>
</body>
</html>