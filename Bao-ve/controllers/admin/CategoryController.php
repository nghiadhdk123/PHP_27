<?php 
	require_once('models/Category.php');

	class CategoryController
	{
		var $model;

		function __construct()
		{
			$this->model = new Category();
		}

	// 	function list()
	// 	{
	// 		$lists = $this->model->all();

	// 		echo "<pre>";
	// 			print_r($lists);
	// 		echo "</pre>";

	// 		require_once('views/home/index.php');
	// 	}
	 }



 ?>