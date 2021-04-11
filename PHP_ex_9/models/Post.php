<?php 
	require_once('Connection.php');
	class Post{
		var $connection;

		function __construct(){
			$connection_obj = new Connection();
			$this->connection = $connection_obj->conn;
		}

		function all()
		{
			$query = "SELECT * FROM post";

			$result = $this->connection->query($query);

			$post = array();
			while ($row = $result->fetch_assoc()) 
			{
				$post[] = $row;
			}

			return $post;
		}

		function find($id)
		{
			$query = "SELECT * FROM post WHERE post.id1=".$id;

			$result = $this->connection->query($query);

			return $result->fetch_assoc();
		}
	}




 ?>