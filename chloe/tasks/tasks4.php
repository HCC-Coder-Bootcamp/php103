<?php 

	$input_x = readline('x'. PHP_EOL);
	$input_y = readline('y ' . PHP_EOL);

	$mine_x = 79;
	$mine_y = 52;

	$h        = $mine_x - $input_x;
	$l        = $mine_y - $input_y;
	$p1       = pow($h, 2) + pow($l, 2);
	$distance = sqrt(p1);


	if ($distance <= 2) {
		$message ='see you at heaven.';
	}	else if ($distance <= 10 )
			$message = '\x07';
		else {
			$message = 'You are safe.';
		}
echo $message;

