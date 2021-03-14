<?php 
	echo "Tam giác 1 : <br>";
	for($i = 0; $i<6; $i++)
	{
		for ($j=0; $j < $i; $j++) { 
			echo " * ";
		}
		echo "<br>";
	}

	echo "<br>";
	echo "Tam giác 2: <br>";
	echo "<br>";
	for ($h=0; $h < 6 ; $h++) 
	{ 
		for ($k=5; $k >= $h ; $k--) { 
			echo " * ";
		}

		echo "<br>";
	}

	echo "<br> Tam giác 3 : <br> <br>";

	for ($k=0; $k < 6 ; $k++) { 
		for ($l=0; $l < 6 ; $l++) { 
			if($l < $k)
			{
				echo "&nbsp&nbsp&nbsp";
			}else{
				echo " * ";
			}
		}
		echo "<br>";
	}

	echo "<br> Tam giác 4 : <br> <br>";

	for ($u=0; $u < 6 ; $u++) { 
		for ($o=0; $o < 6 ; $o++) { 
			if($o < 6-$u)
			{
				echo "&nbsp&nbsp&nbsp";
			}else{
				echo " * ";
			}
		}
		echo "<br>";
	}

 ?>