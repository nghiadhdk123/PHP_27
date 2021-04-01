<?php 
	$id = $_GET['id'];

	require_once ('conextion.php');

	$query = "SELECT * FROM categories WHERE id = " .$id;

	$result = $conn->query($query);

	$cate = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<ul>
		<li>ID: <?php echo $cate['id'] ?> </li>
		<li>Tên bài viết: <?php echo $cate['name'] ?> </li>
		<li>Chuyên mục bài viết: <?php echo $cate['description'] ?> </li>
		<li>Link ảnh bài viết: <?php echo $cate['thumbnail'] ?> </li>
		<li>Slug bài viết: <?php echo $cate['slug'] ?> </li>
	</ul>
</body>
</html>