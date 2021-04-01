<?php 

	require_once('conextion.php');

	$id = $_GET['id'];

	$query = "DELETE FROM categories WHERE id = " .$id;

	$result = $conn->query($query);

	header('Location: list.php');



 ?>