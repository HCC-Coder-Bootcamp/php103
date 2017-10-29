<?php

	$number = readline('Input you number : ' . PHP_EOL . '');

	if ($number == 0) {

		echo 'REJECT';
	
	} else if ($number < 0) {

			$message = 'nagative';

			if ($number % 2 == 0) {

				$result = 'even';
			} else {

				$result = 'odd';
			}
		} else {

				$message = 'positive';

				if ($number % 2 == 0) {

				$result ='even';
			} else {

				$result = 'odd';
			}
		}

		echo "It is an $message $result number. " . PHP_EOL . '';
	