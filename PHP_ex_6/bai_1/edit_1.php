<?php 
	
	$data = $_POST;

	require_once('conextion.php');

	$query = " UPDATE users SET name = '".$data['name']."',email = '".$data['email']."' WHERE id = ".$data['id'];

	$result = $conn->query($query);

	header("Location: index1.php");
    



 ?>