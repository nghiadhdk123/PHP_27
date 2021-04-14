<?php 

	require_once('Model.php');
	class Category extends Model{
		var $table = 'categories';
	}

	// 	function __construct(){
	// 		$connection_obj = new Connection();
	// 		$this->connection = $connection_obj->conn;
	// 	}

	// 	function all(){
	// 		$sql = "SELECT * FROM categories";

	// 		$result = $this->connection->query($sql);

	// 		$categories = array();

	// 		while($row = $result->fetch_assoc())
	// 		{
	// 			 $categories[] = $row;
	// 		}

	// 		return $categories;
	// 	}

	// 	function find($id){
	// 		$sql = "SELECT * FROM categories WHERE id=".$id;

	// 		$result = $this->connection->query($sql);

	// 		return $result->fetch_assoc();
	// 	}

	// 	function create($data)
	// 	{
	// 		$sql = "INSERT INTO categories (name,parent_id,description,thumbnail,slug) VALUES('".$data['name']."',NULL,'".$data['description']."',NULL,NULL)";

	// 		// echo "<pre>";
	// 		// 	print_r($sql);
	// 		// echo "</pre>";
	// 		// die();
	// 		return $this->connection->query($sql);
	// 	}


	// 	function destroy($id)
	// 	{
	// 		$sql = "DELETE FROM categories WHERE id=".$id;

	// 		return $this->connection->query($sql);

	// 	}

	// 	function update($data)
	// 	{
	// 		$sql = "UPDATE categories SET name = '".$data['name']."',description = '".$data['description']."' WHERE id = ".$data['id'];

	// 		return $this->connection->query($sql);
	// 	}
	// }
 ?>