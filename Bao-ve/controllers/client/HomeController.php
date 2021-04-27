<?php 
	require_once('models/Post.php');
	require_once('models/Category.php');
	class HomeController
	{
		var $model;

		function __construct()
		{
			$this->model = new Post();
			$this->category = new Category();
		}

		function index()
		{
			$twoPosts = $this->model->twopost();
			$fourPosts = $this->model->fourpost();
			$read = $this->model->readmore();
			$thethao = $this->model->tinthethao();
			$ttquocte = $this->model->thethaoqt();
			$tinqt = $this->model->tinqt();
			// echo "<pre>";
			// 	print_r($fourPosts);
			// echo "</pre>";
			// die();
			$lists = $this->category->all();
			require_once('views/home/index.php');
		}
	}
	


 ?>