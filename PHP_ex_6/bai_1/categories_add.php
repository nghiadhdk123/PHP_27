<?php
	
	
    $data = $_POST;

	require_once('conextion.php');
    // echo "<pre>";
    // 	print_r($data);
    // echo "</pre>";

    
    $query = "INSERT INTO users(name,email,password,avatar) VALUES ('".$data['name']."','".$data['email']."','".$data['password']."','".$data['avatar']."')";


    $result = $conn->query($query);
    

    header('Location: index1.php');
?>