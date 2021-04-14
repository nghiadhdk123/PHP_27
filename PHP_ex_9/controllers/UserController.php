<?php 
	require_once('models/User.php');

	class UserController
	{
		function list(){

		$models = new User();

		$users = $models->all();

		require_once('views/user/list.php');
		}

		function add()
		{
			require_once('views/user/add.php');
		}

		function detail(){
			$models = new User();

			$id = $_GET['id'];

			$users = $models->find($id);

		require_once('views/user/detail.php');

		}

		function store()
		{
			$data = $_POST;
			$models = new User();

			$sussecc = $models->create($data);

			header("Location:index.php?mod=user&act=list");
		}


		function delete(){
			$models = new User();

			$id = $_GET['id'];

			$users = $models->destroy($id);

			header("Location:index.php?mod=user&act=list");
		}

		function edit(){
			$id = $_GET['id'];
			$models = new User();
			$user = $models->find($id);
			// var_dump($category);
			// die();
			require_once('views/user/edit.php');
		}

		function update(){

			$data = $_POST;

			$models = new User();

			// var_dump($data);
			// die();

			$status = $models->update($data);

			header("Location:index.php?mod=user&act=list");



		}
	}

 ?>
