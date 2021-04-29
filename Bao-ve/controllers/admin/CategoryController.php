<?php 
	require_once('models/Category.php');

	class CategoryController
	{
		var $model;

		function __construct()
		{
			$this->model = new Category();
		}
	 }
 ?>