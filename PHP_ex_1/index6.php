<?php 
	
	$Sum = 0;
	$GT = 1;
	for ($i=1; $i <= 10 ; $i++) { 
		$GT*=$i;
		$Sum = $Sum + ($i/$GT);
	}

	echo "Sum = " . $Sum;


 ?>