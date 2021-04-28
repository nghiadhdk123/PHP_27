<?php 
	require_once 'connextion.php';

	$obj = new Connection();

	 $query = "INSERT INTO categories (name, description) VALUES ('".$data['name']."','".$data['description']."')";

	 $status = $obj->conn->query($query);

 ?>