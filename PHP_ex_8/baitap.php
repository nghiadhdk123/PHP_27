<?php 
	class post{
		var $title;
		var $link;
		var $description;
		var $content;

		function inpost(){
			echo "Thông tin bài viết :<br>";
		}
	}

	class categories extends post{
		var $name;
		var $danhmuccha;
		var $avatar;

		function cate(){
			echo "Thông tin danh mục :<br>";
		}
	}

	class users{
		var $name;
		var $email;
		var $password;
		var $avatar;

		function user(){
			echo "Thông tin người dùng :<br>";
		}
	}

	$input = new categories();
	$input1 = new users();

	$input->title = "Báo thời sự";
	$input->link = "https://vietnamnet.vn/vn/thoi-su/";
	$input->description = "BÁO-THỜI-SỰ";
	$input->name = "Thời sự hôm nay";
	$input->content = "Bài báo nói về tin .... ";
	$input->danhmuccha = "Tin thời sự";
	$input->avatar = "thoi_su.jpg";
	$input1->name = "Trần Đình Nghĩa";
	$input1->email = "trandinhnghia555@gmail.com";
	$input1->password = "12345";
	$input1->avatar = "tdn.jpg";

	$input->inpost();
	echo "<br>";
	echo "Tiêu đề : ".$input->title."<br>";
	echo "Đường dẫn : ".$input->link."<br>";
	echo "Mô tả : ".$input->description."<br>";
	echo "Nội dung : ".$input->content."<br>";

	echo "<br>";
	$input->cate();
	echo "<br>";
	echo "Tên: ".$input->name."<br>";
	echo "Đường dẫn: ".$input->link."<br>";
	echo "Danh mục cha: ".$input->danhmuccha."<br>";
	echo "Avatar: ".$input->avatar."<br>";
	echo "Mô tả: ".$input->description."<br>";

	echo "<br>";
	$input1->user();
	echo "<br>";
	echo "Tên người dùng :" .$input1->name."<br>";
	echo "Email :" .$input1->email."<br>";
	echo "Mật khẩu :" .sha1($input1->password)."<br>";
	echo "Ảnh đại diện :" .$input1->avatar."<br>";

 ?>