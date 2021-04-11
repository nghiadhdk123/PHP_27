<?php 

	require_once('models/Category.php');
	class CategoryController{

		function list(){
			$models = new Category();
			$categories = $models->all();

		require_once('views/list.php');
		}

		function detail(){
			$models = new Category();

			$id = $_GET['id'];

			$categories = $models->find($id);

		require_once('views/detail.php');
		}
		function add(){
			echo "<br>Them moi danh sach";
		}
		function edit(){
			echo "<br>Sua danh sach";
		}
		function delete(){
			echo "<br>Xoa danh sach";
		}
	}




 ?>