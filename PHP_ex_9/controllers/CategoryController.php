<?php 

	require_once('models/Category.php');
	class CategoryController{

		function list(){
			$models = new Category();
			$categories = $models->all();

		require_once('views/category/list.php');
		}

		function detail(){
			$models = new Category();

			$id = $_GET['id'];

			$categories = $models->find($id);

		require_once('views/category/detail.php');
		}

		function add(){

			require_once('views/category/add.php');
		}

		function store()
		{
			$data = $_POST;
			$models = new Category();

			$sussecc = $models->create($data);

			if($sussecc)
			{
				setcookie('sussecc','Them moi thanh cong',time()+10);
			}else{
				setcookie('error','Them moi that bai',time()+10);

			}

			header("Location:index.php?mod=category&act=list");
		}


		function delete(){
			$models = new Category();

			$id = $_GET['id'];
		
			$categories = $models->destroy($id);

				if($categories)
				{
					setcookie('tc','Xoa thanh cong',time()+10);
				}else{
					setcookie('tt','Xoa',time()+10);
				}

			header("Location:index.php?mod=category&act=list");


		}

		function edit(){
			$id = $_GET['id'];
			$models = new Category();
			$category = $models->find($id);
			// var_dump($category);
			// die();
			require_once('views/category/edit.php');
		}

		function update(){

			$data = $_POST;

			$models = new Category();

			// var_dump($data);
			// die();

			$categories = $models->update($data);

			header("Location:index.php?mod=category&act=list");



		}


	}




 ?>