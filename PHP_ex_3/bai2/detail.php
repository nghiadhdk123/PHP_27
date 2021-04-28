 <?php 
 		session_start();
 		if(isset($_GET['msv'])) {
 			$student = $_GET['msv'];
 			$hs = $_SESSION[$student];
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
 	<table class="table">
 		<tr>
 			
 			<td>
 				ID : <?php echo $_SESSION[$student]['msv'] ?>
 			</td>
 			<td>
 				Name : <?php echo $hs['name'] ?>
 			</td>
 			<td>
 				Phone : <?php echo $hs['phone'] ?>
 			</td>
 			<td>
 				Mail : <?php echo $hs['mail'] ?>
 			</td>
 			<td>
 				Gender : <?php echo $hs['gender'] ?>
 			</td>
 			<td>
 				Address : <?php echo $hs['add'] ?>
 			</td>
 		</tr>
 	</table>

 	<a href="list.php" class="btn btn-danger m-auto w-50">Thoát</a>


 </body>
 </html>