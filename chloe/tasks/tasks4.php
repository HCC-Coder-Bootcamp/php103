<?php 

	$input_x = readline('distance_x'. PHP_EOL);
	$input_y = readline('distance_y ' . PHP_EOL);

	$mine_x = 79;
	$mine_y = 52;


	if ($input_x >= 10) {
		echo "SUSPICIOS_x" . PHP_EOL;
	}	else if ($input_x <= 2 )
		echo "\x07 ";


	if ($input_y >= 10){
		echo "SUSPICIOS_y" . PHP_EOL;
	}	else if ($input_y <= 2 )
		echo "\x07";

