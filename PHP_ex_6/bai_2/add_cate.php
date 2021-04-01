<?php 
$data = $_POST;

	require_once('conextion.php');
    // echo "<pre>";
    // 	print_r($data);
    // echo "</pre>";

    
    $query = "INSERT INTO categories(name,description,thumbnail,slug,creat_at) VALUES ('".$data['name']."','".$data['description']."','".$data['thumbnail']."','".$data['slug']."','".$data['creat_at']."')";


    $result = $conn->query($query);

    header('Location:list.php');
	

 ?>