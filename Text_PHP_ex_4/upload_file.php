<?php 
	if(isset($_POST['submit'])) {
		$img = array();
		$target_dir = 'uploads/';
		$target_file = $target_dir .basename($_FILES['upload_file']['name']);

		if (move_uploaded_file($_FILES["upload_file"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
            echo "The file ". basename( $_FILES["upload_file"]["name"]). " has been uploaded.";
            $img[] = $target_file;
        } else { // Upload file có lỗi 
            echo "Sorry, there was an error uploading your file.";
        }
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
 	<h2>UPLOAD FILE LÊN SERVER</h2>
 	<form action="" method="POST" enctype="multipart/form-data">
 		<input type="file" name="upload_file" id="upload_file">
 		<input type="submit" name="submit" value="Submit">
 	</form>
 	<?php 
 		for ($i=0; $i < count($img) ; $i++) { 
 	 ?>
 	<div style="width: 400px ; height: 400px">
 		<img src=" <?php echo $img[$i] ?> " alt="" width="100%">
 	</div>

 	<?php } ?>
 </body>
 </html>