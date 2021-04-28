<?php 
	echo "<pre>";
		print_r($_COOKIE);
	echo "</pre>";

	setcookie('class' , 'PHP27' ,time() + 5);

	echo "<br>" . $_COOKIE['class'];


 ?>