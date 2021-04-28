<?php 
	class iphone
	{
		var $hangSX;
		var $ten;
		var $mausac;
		var $manhinh;


		function themvaogiohang(){
			echo "<br>Đã thêm vào giỏ hàng";
		}

		function __construct(){
			echo "Hello world<br>";
			$t = str_repeat('xuan xep<br>',10);
			echo $t;
		}
	}
	

	 $iphone6 = new iphone();


	// $iphone6->hangSX = "Apple";
	// $iphone6->ten = "Iphone6 plus";
	// $iphone6->mausac = "Xám";
	// $iphone6->manhinh = "6 inch";

	// $iphone6->themvaogiohang();

 ?>