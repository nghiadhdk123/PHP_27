<?php 

	require_once('conextion.php');

	$id = $_GET['id'];

	$query = "DELETE FROM post WHERE post.id1 = " .$id;

	$result = $conn->query($query);

	header('Location:index.php');
 ?>