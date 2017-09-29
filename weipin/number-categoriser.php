<?php 

	$input = readline('Number:' . PHP_EOL);

	if ($input > 0) {
		echo 'positive' . PHP_EOL;
		if ($input % 2) {
			echo 'odd';
		}
		else {
			echo 'even';
		}
	}

	else if ($input < 0){
		echo 'negative' . PHP_EOL;
		if ($input % 2) {
			echo 'odd';
		}
		else {
			echo 'even';
		}
	}

 ?>