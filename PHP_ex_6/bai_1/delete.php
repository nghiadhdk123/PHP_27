<?php 

	require_once('conextion.php');

	$id = $_GET['id'];

	$query = "DELETE FROM users WHERE id = " .$id;

	$result = $conn->query($query);

	header('Location: index1.php');



 ?>