<?php 
	session_start();
	if(isset($_POST['submit'])) {
		$data = array();
		$data['id'] = $_POST['id'];
		$data['name'] = $_POST['name'];

		$target_dir = 'upload_file2/';
		$target_file = $target_dir .basename($_FILES['uploadfile']['name']);

		 if (move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
            echo "The file ". basename( $_FILES["uploadfile"]["name"]). " has been uploaded.";
            setcookie('warning',1, time()+5);
        } else { // Upload file có lỗi 
            echo "Sorry, there was an error uploading your file.";
        }

        if (file_exists($target_file)) {
    		setcookie("warning2",1,time()+5);
		}

	

	$_SESSION[$data['id']] = $data;

	echo "<pre>";
		print_r($_SESSION);
	echo "</pre>";

	//session_destroy();
	header('Location: list.php');
}
	
 ?>