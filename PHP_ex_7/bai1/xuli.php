<?php 

	require_once "conextion.php";
	$id = $_GET['id'];
	$post = NULL;
	$query = "SELECT * FROM post WHERE id = ".$id;

	$result = $conn->query($query);

	$post = $result->fetch_assoc();

	echo json_encode($post);

 ?>