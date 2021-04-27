<?php 
	require_once('models/Post.php');
	require_once('models/Category.php');
	class PostController
	{
		var $model;

		function __construct()
		{
			$this->model = new Post();
			$this->cate = new Category();
		}

		function detail()
		{
			$id = $_GET['id'];

			$detailPost = $this->model->find($id);
			$techPost = $this->model->Sportpost($id);
			$list_cate = $this->cate->all();

			require_once('views/post/detail.php');
		}

		function list()
		{
			$id = $_GET['id'];
			$techPost = $this->model->Sportpost($id);
			$listtttt = $this->cate->list_category();
			// echo "<pre>";
			// 	print_r($techPost);
			// echo "</pre>";
			require_once('views/post/list.php');
		}

		// function list2()
		// {
		// 	$techPost = $this->model->Sportpost();

		// 	require_once('views/post/list2.php');
		// }

		// function list3()
		// {
		// 	$techPost = $this->model->Thoisupost();

		// 	require_once('views/post/list3.php');
		// }

		function lists()
		{
			$lists = $this->model->all();

			require_once('views/admin/list.php');
		}

		function list_dete()
		{
			$lists = $this->model->all();

			require_once('views/admin/xoa.php');
		}

		function delete()
		{
			$id = $_GET['id'];

			$delete = $this->model->destroy($id);

			if($delete)
			{
				setcookie('sussecc','Xóa thành công',time()+10);
			}else{
				setcookie('error','Xóa thất bại',time()+10);

			}
			header('Location:index.php?admin=admin&mod=post&act=list_dete');
		}

		function admin()
		{
			require_once('views/admin/admin.php');
		}

		function add()
		{
			$cate = new Category();
			$category = $cate->all();
			require_once('views/admin/them.php');
		}

		function store()
		{
			$data = $_POST;

			$target_dir = "public/images/";  // thư mục chứa file upload

        	$target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên
        
       		 if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
           		 $img = array('thumbnail'=>$_FILES["thumbnail"]["name"]);
           		 $data = array_merge($data,$img);
        	} else { // Upload file có lỗi 
           		 echo "Sorry, there was an error uploading your file.";
        	}

			$create = $this->model->create($data);

			if($create)
			{
				setcookie('sussecc_add','Thêm bài viết thành công',time()+10);
			}else{
				setcookie('error_add','Thêm bài viết thất bại',time()+10);

			}

			header('Location:index.php?admin=admin&mod=post&act=add');
		}

		function edit()
		{
			$id = $_GET['id'];

			$update = $this->model->find($id);

			require_once('views/admin/edit.php');
		}

		function update(){

			$data = $_POST;

			$target_dir = "public/images/";  // thư mục chứa file upload

        	$target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên
        
       		 if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
           		 $img = array('thumbnail'=>$_FILES["thumbnail"]["name"]);
           		 $data = array_merge($data,$img);
        	} else { // Upload file có lỗi 
           		 echo "Sorry, there was an error uploading your file.";
        	}

			$updated = $this->model->update($data);

			if($updated)
			{
				setcookie('sussecc_update','Sửa bài viết thành công',time()+10);
			}else{
				setcookie('error_update','Sửa bài viết thất bại',time()+10);

			}
			header('Location:index.php?admin=admin&mod=post&act=list_dete');
		}
	}




 ?>