<?php 
	require_once('models/Post.php');
	class HomeController
	{
		var $model;

		function __construct()
		{
			$this->model = new Post();
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
			require_once('views/home/index.php');
		}
	}
	


 ?>