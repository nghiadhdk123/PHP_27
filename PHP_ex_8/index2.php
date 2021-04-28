<?php 

	class conguoi{
		var $hoten;
		var $ngaysinh;


		function mess(){
			echo "Day la lop con nguoi";
		}
	}


	class hocsinh extends conguoi{
		var $truong;
		var $lop;
	}

	class sv extends hocsinh{
		var $msv;
	}


	$cn = new hocsinh();
	$cn->hoten = "Nghia";
	$cn->ngaysinh = "13/10/2001";
	echo "<br>Ho ten : " .$cn->hoten;
	echo "<br>Ngay sinh : " .$cn->ngaysinh;
 ?>