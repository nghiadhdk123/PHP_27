<?php 
	require_once('models/Users.php');

	class UsersContronller
	{
		function list(){

		$models = new Users();

		$users = $models->all();

		require_once('view_users/list.php');
		}

		function detail(){
			$models = new Users();

			$id = $_GET['id'];

			$users = $models->find($id);

			require_once('view_users/detail.php');

		}
	}




 ?>