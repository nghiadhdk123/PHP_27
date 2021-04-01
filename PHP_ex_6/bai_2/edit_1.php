<?php 
	
	$data = $_POST;

	require_once('conextion.php');

	$query = " UPDATE categories SET name = '".$data['name']."',description = '".$data['description']."',thumbnail = '".$data['thumbnail']."',slug = '".$data['slug']."' WHERE id = ".$data['id'];

	$result = $conn->query($query);

	header("Location: list.php");
    



 ?>