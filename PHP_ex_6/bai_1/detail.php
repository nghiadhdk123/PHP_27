<?php 
	$id = $_GET['id'];

	require_once ('conextion.php');

	$query = "SELECT * FROM users WHERE id = " .$id;

	$result = $conn->query($query);

	$users = $result->fetch_assoc();

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
		<li>ID: <?php echo $users['id'] ?> </li>
		<li>Name: <?php echo $users['name'] ?> </li>
		<li>Email: <?php echo $users['email'] ?> </li>
		<li>PW: <?php echo $users['password'] ?> </li>
	</ul>
</body>
</html>