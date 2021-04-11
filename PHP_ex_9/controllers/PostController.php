<?php 

	require_once('models/Post.php');

	class PostContronller{

		function list(){
			$models = new Post();
			$post = $models->all();

			require_once('view_post/list.php');
		}

		function detail()
		{
			$models = new Post();

			$id = $_GET['id'];

			$post = $models->find($id);

			require_once('view_post/detail.php');
		}
	}



 ?>