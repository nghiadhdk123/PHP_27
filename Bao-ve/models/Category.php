<?php 
	require_once("Model.php");
	class Category extends Model
	{
		var $table = "categories";

		function list_category()
		{
			$sql = "SELECT * FROM ".$this->table;
			$result = $this->connection->query($sql);
			$lists = array();

			while($row = $result->fetch_assoc())
			{
				$lists[] = $row;
			}

			return $lists;
		}

	}
 ?>