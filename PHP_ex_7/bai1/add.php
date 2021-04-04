<?php 

	$data = $_POST;
	require_once('conextion.php');
	
	$query = "INSERT INTO post(title,description1,content,view_count,users_id,cate_id) VALUES ('".$data['title']."','".$data['description1']."','".$data['content']."','".$data['view_count']."','".$data['users_id']."','".$data['cate_id']."')";

	$result = $conn->query($query);
	header("Location: index.php");

 ?>