<?php 
	session_start();

	echo "<pre>";
		print_r($_SESSION);
	echo "</pre>";

	 //$_SESSION['name'] = "Trần Đình Nghĩa";
	 //$_SESSION['name2'] = "Trần Đình Nghĩa nHGiaax";

	echo "<pre>";
		print_r($_SESSION);
	echo "</pre>";


	echo $_SESSION['name'];

	session_destroy()
	

	

 ?>