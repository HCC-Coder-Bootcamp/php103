<?php

/*Number categoriser
Detect if an input number is positive or negative? odd or even? or reject if given 0. **/
$inputNumber = readline ('You Number : ' . PHP_EOL . '');

	if ($inputNumber == 0) {

		echo 'REJECT !' . PHP_EOL . '';

	} else if ($inputNumber < 0) {

		if ($inputNumber % 2 == 0) {
			$message = 'negative even number ';

		} else {
			$message = 'negative odd number ';
		}

	} else if ($inputNumber > 0) {
		
		if ($inputNumber % 2 == 0) {
			$message = 'positive even number ';

		} else {
			$message = 'positive odd number ';
		}

		echo 'It is ' . $message . PHP_EOL .  '';
		
	}
	
	