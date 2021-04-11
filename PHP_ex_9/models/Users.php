<?php 
	require_once('Connection.php');

	class Users
	{
		var $connection;

		function __construct(){
			$connection_obj = new Connection();
			$this->connection = $connection_obj->conn;
		}

		function all()
		{
			$sql = "SELECT * FROM users";

			$result = $this->connection->query($sql);

			$users = array();

			while ($row = $result->fetch_assoc())
			{
				$users[] = $row;
			}

			return $users;
		}


		function find($id)
		{
			$sql = "SELECT * FROM users WHERE id =".$id;

			$result = $this->connection->query($sql);

			return $result->fetch_assoc();
		}
	}





 ?>