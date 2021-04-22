 <?php 
	require_once('Model.php');

	class Post extends Model
	{
		var $table = "post";

		function twopost()
		{
			$sql = "SELECT * FROM ".$this->table." INNER JOIN user ON post.`user_id` = user.`user_id` INNER JOIN categories ON post.`categories_id` = categories.`categories_id` ORDER BY id DESC LIMIT 2";

				$result = $this->connection->query($sql);

				$twoPosts = array();

				while($row = $result->fetch_assoc())
				{
					 $twoPosts[] = $row;
				}

				return $twoPosts;
		}

		function fourpost()
		{
			$sql = "SELECT * FROM ".$this->table." INNER JOIN user ON post.`user_id` = user.`user_id` INNER JOIN categories ON post.`categories_id` = categories.`categories_id` WHERE categories.`name1` = 'Tin Công Nghệ' ORDER BY id DESC LIMIT 4";

				$result = $this->connection->query($sql);

				$fourPosts = array();

				while($row = $result->fetch_assoc())
				{
					 $fourPosts[] = $row;
				}

				return $fourPosts;

		}

		function readmore()
		{
				$sql = "SELECT * FROM ".$this->table." INNER JOIN user ON post.`user_id`=user.`user_id` INNER JOIN categories ON post.`categories_id` = categories.`categories_id` WHERE viewcount >= 100 ORDER BY id DESC LIMIT 4";

				$result = $this->connection->query($sql);

				$read = array();

				while($row = $result->fetch_assoc())
				{
					 $read[] = $row;
				}

				return $read;
		}

		function tinthethao()
		{
			$sql = "SELECT * FROM ".$this->table." INNER JOIN user ON post.`user_id` = user.`user_id` INNER JOIN categories ON post.`categories_id` = categories.`categories_id` WHERE categories.`name1` = 'Tin Thể Thao' ORDER BY id DESC LIMIT 1";

				$result = $this->connection->query($sql);

				$twoPosts = array();

				while($row = $result->fetch_assoc())
				{
					 $twoPosts[] = $row;
				}

				return $twoPosts;
		}

	function thethaoqt()
	{
		$sql = "SELECT * FROM ".$this->table." INNER JOIN user ON post.`user_id` = user.`user_id` INNER JOIN categories ON post.`categories_id` = categories.`categories_id` WHERE categories.`name1` = 'Tin Thể Thao' ORDER BY id DESC LIMIT 1,3";

				$result = $this->connection->query($sql);

				$twoPosts = array();

				while($row = $result->fetch_assoc())
				{
					 $twoPosts[] = $row;
				}

				return $twoPosts;
	}

	function tinqt()
	{
		$sql = "SELECT * FROM ".$this->table." INNER JOIN user ON post.`user_id` = user.`user_id` INNER JOIN categories ON post.`categories_id` = categories.`categories_id` WHERE categories.`name1` = 'Tin quốc tế' ORDER BY id DESC LIMIT 3";

				$result = $this->connection->query($sql);

				$twoPosts = array();

				while($row = $result->fetch_assoc())
				{
					 $twoPosts[] = $row;
				}

				return $twoPosts;
	}

	function muchposts()
		{
			$sql = "SELECT * FROM ".$this->table." INNER JOIN user ON post.`user_id` = user.`user_id` INNER JOIN categories ON post.`categories_id` = categories.`categories_id` ORDER BY RAND() LIMIT 6";

				$result = $this->connection->query($sql);

				$twoPosts = array();

				while($row = $result->fetch_assoc())
				{
					 $twoPosts[] = $row;
				}

				return $twoPosts;
		}

	function Techpost()
		{
			$sql = "SELECT * FROM ".$this->table." INNER JOIN user ON post.`user_id` = user.`user_id` INNER JOIN categories ON post.`categories_id` = categories.`categories_id` WHERE categories.`name1` = 'Tin Công Nghệ' ORDER BY id ASC";

				$result = $this->connection->query($sql);

				$fourPosts = array();

				while($row = $result->fetch_assoc())
				{
					 $fourPosts[] = $row;
				}

				return $fourPosts;

		}

	function Sportpost()
		{
			$sql = "SELECT * FROM ".$this->table." INNER JOIN user ON post.`user_id` = user.`user_id` INNER JOIN categories ON post.`categories_id` = categories.`categories_id` WHERE categories.`name1` = 'Tin Thể Thao' ORDER BY id ASC";

				$result = $this->connection->query($sql);

				$fourPosts = array();

				while($row = $result->fetch_assoc())
				{
					 $fourPosts[] = $row;
				}

				return $fourPosts;

		}

	function Thoisupost()
		{
			$sql = "SELECT * FROM ".$this->table." INNER JOIN user ON post.`user_id` = user.`user_id` INNER JOIN categories ON post.`categories_id` = categories.`categories_id` WHERE categories.`name1` = 'Tin quốc tế' ORDER BY id ASC";

				$result = $this->connection->query($sql);

				$fourPosts = array();

				while($row = $result->fetch_assoc())
				{
					 $fourPosts[] = $row;
				}

				return $fourPosts;

		}
	}//End class Post

 ?>