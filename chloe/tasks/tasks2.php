<?php 

	$input = readline('number' . PHP_EOL);

	if ($input > 0){
		echo "Positive" . PHP_EOL;
	}
	
	else if ($input < 0){
		echo "Negative" . PHP_EOL;
	}

	else {
		echo "REJECT-0" . PHP_EOL;
	}

 	if (($input % 2) == 1 || -1){
 		echo "Odd" . PHP_EOL;
 	}
 	else if (($input % 2) == 0){
 		echo "Even" . PHP_EOL;
 	}
 	else {
 		echo "REJECT1" . PHP_EOL;
 	}