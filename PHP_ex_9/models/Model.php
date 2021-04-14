<?php 
	
	require_once('Connection.php');
	class Model{
		var $table;
		var $connection;

		function __construct(){
			$connection_obj = new Connection();
			$this->connection = $connection_obj->conn;
		}

		function all(){
			$sql = "SELECT * FROM ".$this->table;

			$result = $this->connection->query($sql);

			$categories = array();

			while($row = $result->fetch_assoc())
			{
				 $categories[] = $row;
			}

			return $categories;
		}

		function find($id){
			$sql = "SELECT * FROM ".$this->table." WHERE id=".$id;

			$result = $this->connection->query($sql);

			return $result->fetch_assoc();
		}

		function destroy($id)
		{
			$sql = "DELETE FROM ".$this->table." WHERE id=".$id;

			return $this->connection->query($sql);

		}

		function create($data)
	 	{
	 		 $columns ='';
	 		 $values ='';
	 		foreach ($data as $key => $value) {
	 			$columns .= $key . ',';
	 			$values .= "'".$value."',";
	 		}
	 		$columns = trim($columns,',');
	 		$values = trim($values,',');

	 		// echo $columns;
	 		// echo $values;

			 $sql = "INSERT INTO ".$this->table." (".$columns.") VALUES (".$values.")";

			 // echo "<br> $sql";

			 // die();

			// echo "<pre>";
			// 	print_r($data);
			// echo "</pre>";
			// die();
			return $this->connection->query($sql);
		}

		function update($data)
				{

			 		 $values ='';
			 		foreach ($data as $key => $value) {
			 			$values .= $key. "='".$value."',";
			 		}
			 		$values = trim($values,',');

					$sql = "UPDATE ".$this->table." SET ".$values." WHERE id = ".$data['id'];

					return $this->connection->query($sql);
				}
	}



 ?>