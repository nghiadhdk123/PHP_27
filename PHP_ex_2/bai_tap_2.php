<?php 
	$arr = array(1,4,2,6,9,100,4);

	$dem = count($arr);
	echo "Mảng ban đầu là : ";
	foreach ($arr as  $value) {
		echo($value) . "  ";
	}
	
	echo "<br><br>Mảng sau khi sắp xếp ngược lại : ";
	for ($i=1; $i <= $dem ; $i++) { 
			echo  $arr[$dem - $i] . "  ";
	}


 ?>