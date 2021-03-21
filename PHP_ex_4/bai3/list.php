<?php
	session_start();

	$tl = $_SESSION;
	// session_destroy();

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
		<td colspan="3" align="center" style="font-size: 20px;font-weight: bold;">DOCUMENT</td>
		<td align="center"><a href="upload.php" class="btn btn-warning">Upload Document</a></td>
	</tr>
	<tr style="font-weight: bold;">
		<td align="center">ID</td>
		<td align="center">Name</td>
		<td align="center">Dowload</td>
		<td align="center">#</td>
	</tr>
	<tbody>
		
			<?php 
				foreach ($tl as $key => $value) {
			 ?>
			 <tr>
				 <td align="center"> <?php echo $value['id']; ?> </td>
				 <td align="center"> <?php echo $value['name']; ?> </td> 
				 <td align="center"> <a href="dowload.php?value=<?=$value['id']?>" class="btn btn-primary">Download</a> </td>
				 <td align="center"> <a href="remove.php?value=<?=$value['id']?>" class="btn btn-danger">Remove</a> </td>
			</tr>
			<?php  } ?>
		
	</tbody>  
</table>
</body>
</html>