<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<ul>
		<li>
			<?php 
				echo "Mã Sinh Viên : " . $_POST['msv'];
			?>	
		</li>
		<li>
			<?php 
				echo "Họ Tên : " . $_POST['name'];
			?>	
		</li>
		<li>
			<?php 
				echo "Số Điện Thoại : " . $_POST['phone'];
			?>	
		</li>
		<li>
			<?php 
				echo "Email : " . $_POST['mail'];
			?>	
		</li>
		<li>
			<?php 
				echo "Địa Chỉ : " . $_POST['add'];
			?>	
		</li>
		<li>
			<?php 
				echo "Giới tính : " . $_POST['gender'];
			?>	
		</li>
	</ul>
</body>
</html>