<?php 
	session_start();

	if(isset($_SESSION['cartsp'])) {
		$car = $_SESSION['cartsp'];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<table>
		<tr>
			<td colspan="6">Thông tin sản phẩm</td>
			<td colspan="4"><a href="index3.php">Tiếp tục mua hàng</a></td>
		</tr>
		<tr>
			<td colspan="1">ID</td>
			<td colspan="3">Sản phẩm</td>
			<td colspan="1">Số lượng</td>
			<td colspan="3">Giá</td>
			<td colspan="2">Thành Tiền</td>
		</tr>
		<tr>
		<?php 
			$sum = 0;
			foreach ($car as  $value) {
			$sum = $value['dg'] * $value['sl'];
		 ?>
		 	<td colspan="1"> <?php echo $value['id']; ?> </td>
		 	<td colspan="3"> <?php echo $value['tsp']; ?> </td>
		 	<td colspan="1"> <?php echo $value['sl']; ?> </td>
		 	<td colspan="3"> <?php echo $value['dg']; ?> </td>
		 	<td colspan="2"> <?php echo $sum; ?> </td>
		 	<td>
		 		<a href="#">Xóa Sản Phẩm</a>
		 	</td>
		<?php } ?>
		</tr>
	</table>
</body>
</html>