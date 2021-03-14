<?php 

	echo "Tính tổng 10 số chẵn đầu tiên từ 0 -> 18 <br>";
	$Sum = 0;
	for ($i=0; $i < 20 ; $i++) { 
		if($i%2 == 0)
		{
			$Sum += $i;
		}
	}
	echo "Sum = " . $Sum;

 ?>