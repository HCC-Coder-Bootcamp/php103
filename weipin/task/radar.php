<?php 

	$positionX = readline("Input x:" . PHP_EOL);
	$positionY = readline("Input y:" . PHP_EOL);

	if ( $positionX <= 81 && $positionY <= 54 ) {
		echo "BYE~BYE~";
		echo "\x07";
	}

	else if ( $positionX < 89 && $positionY < 62 ) {
		echo ("Warning! Enemy is close the mine!");
	}
	else {
		echo "Enemy position: " . "(" . $positionX . "," . $positionY . ")";
	}

 ?>