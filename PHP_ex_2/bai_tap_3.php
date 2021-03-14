<?php 
	$arr = array(1,4,2,6,9,100,-2);
	$dem = count($arr);
	echo "Mảng ban đầu khởi tạo là : ";
	foreach ($arr as  $value) {
		echo '  '.$value;
	}
	for ($i=0; $i < $dem ; $i++) { 
		for ($j=$i+1; $j < $dem; $j++) { 
			if($arr[$i] > $arr[$j])
			{
				$temp = $arr[$i];
				$arr[$i] = $arr[$j];
				$arr[$j] = $temp;
			}
		}
	}
	echo "<br><br>Mảng sau khi sắp xếp tăng dần là : ";
	for ($i=0; $i < $dem ; $i++) { 
		echo "  " . $arr[$i];
	}


 ?>