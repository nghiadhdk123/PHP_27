<?php 
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
 		<table class="table" border="1" style="width: 400px;margin: 50px auto;text-align: center;">
 			<tr>
 				<td colspan="6">Danh sách sản phẩm</td>
 				<td colspan="4"><a href="#">Xem giỏ hàng</a></td>
 			</tr>
 			<tr>
 				<td colspan="1">ID</td>
 				<td colspan="4">Sản phẩm</td>
 				<td colspan="3">Giá</td>
 				<td colspan="3">Hành động</td>
 			</tr>

 			<?php 
 				foreach ($cart as $key => $value) {
 			 ?>
 			 	<tr>
 			 		<td colspan="1"> <?php echo $value['id']; ?> </td>
 			 		<td colspan="4"> <?php echo $value['tsp']; ?> </td>
 			 		<td colspan="3"> <?php echo $value['dg']; ?> </td>
 			 		<td colspan="3"><a href="add_sp2.php">Add to cart</a></td>
 			 	</tr>		
 			<?php } ?>
 			
 		</table>
 	</div>
 </body>
 </html> 
	


