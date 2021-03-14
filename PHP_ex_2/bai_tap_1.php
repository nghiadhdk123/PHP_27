<?php 
	$arr = array(1,4,2,6,9,110,45,8,200);
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	$max = $arr[0];

	for($i=1;$i<count($arr);$i++)
	{
		if($max < $arr[$i])
		{
			$max = $arr[$i];
		}
	}

	echo "<br>Phần tử lớn nhất trong mảng là : " .$max;


 ?>