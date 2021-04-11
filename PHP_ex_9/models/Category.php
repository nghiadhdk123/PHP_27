<?php 

	require_once('Connection.php');
	class Category{
		var $connection;

		function __construct(){
			$connection_obj = new Connection();
			$this->connection = $connection_obj->conn;
		}

		function all(){
			$sql = "SELECT * FROM categories";

			$result = $this->connection->query($sql);

			$categories = array();

			while($row = $result->fetch_assoc())
			{
				 $categories[] = $row;
			}

			return $categories;
		}

		function find($id){
			$sql = "SELECT * FROM categories WHERE id=".$id;

			$result = $this->connection->query($sql);

			return $result->fetch_assoc();
		}
	}
 ?>