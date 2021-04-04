<?php 

	$data = $_POST;

	require_once('conextion.php');

	

	$query = "UPDATE post SET title = '".$data['title']."',description1 = '".$data['description1']."',content = '".$data['content']."' WHERE post.id1=" . $data['id1'];

	$result = $conn->query($query);

	header("Location:index.php")


 ?>