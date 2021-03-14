<?php 
	
	$a = 2;
	$b = 3;
	$c = 1;

	if($a == 0)
		{
			if($b==0)
			{
				echo "Phương trình vô nghiệm";
			}else{
				echo "Phương trình có 1 nghiệm <br>";
				$nghiem = (-$c)/$b;
				echo "x = " . $nghiem;
			}
		}else{
			$delta = pow($b,2) - 4*$a*$c;
			echo "Delta = " . $delta ."<br>";
			if($delta == 0)
			{
				echo "Phương trình có nghiệm kép : <br>";
				$x = (-$b)/(2*$a);
				echo "x = " . $x;
			}else if ($delta > 0) {
				echo "Phương trình có hai nghiệm phân biệt :<br>";
				$x1 = ((-$b)+sqrt($delta))/(2*$a);
				$x2 = ((-$b)-sqrt($delta))/(2*$a);
				echo "x1 = " . $x1 ."<br>";
				echo "x2 = " . $x2;
			}else{
				echo "Phương trình vô nghiệm";
			}
		}
 ?>