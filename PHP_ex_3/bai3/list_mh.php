<?php
	$gh = array();
	$gh = array(
		'SP01'=>array(
			'id' => 'SP01',
			'tensp' => 'Iphone 4 32GB',
			'dongia' => 5000000,
			'soluong' => 4234,
		),
		'SP02'=>array(
			'id' => 'SP02',
			'tensp' => 'Ipad Mini 16GB',
			'dongia' => 8000000,
			'soluong' => 4234243,
		),
		'SP03'=>array(
			'id' => 'SP03',
			'tensp' => 'Iphone 5 32GB',
			'dongia' => 3000000,
			'soluong' => 3234,
		),
		'SP04'=>array(
			'id' => 'SP04',
			'tensp' => 'Iphone 6 32GB',
			'dongia' => 10000000,
			'soluong' => 4234,
		),
	);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<table width="500px" height="200px" border="2px" align="center">
	<tr>
		<td colspan="3" align="center" style="font-size: 20px;font-weight: bold;">Danh sách sản phẩm</td>
		<td align="center"><a href="addgiohang.php">Xem giỏ hàng</a></td>
	</tr>
	<tr style="font-weight: bold;">
		<td align="center">ID</td>
		<td align="center">Tên sản phẩm</td>
		<td align="center">Đơn giá</td>
		<td align="center">Hành Động</td>
	</tr>
	<tbody>
		<?php
		$i = 0;
		foreach ($gh as $value) {
			$i++;

			?>
			<tr>
				<td><?php echo $value['id']; ?></td>
				<td><?php echo $value['tensp']; ?></td>
				<td><?php echo number_format($value['dongia']); ?></td>
				<td>
					<a href="add_sp2.php?id=<?= $value['id'] ?>">
						Add to cart
					</a>
				</td>
			</tr>
		<?php } ?>
	</tbody>  
</table>
</body>
</html>