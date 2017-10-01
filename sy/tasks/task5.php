<?php

	$class = readline('You class : ');
	$score = readline('You Score :');

	if ($class == 'A') {
		if ($score >= 80) {
			$result = 'passed';
		}else {
			$result = 'falied';
		}

	} else if ($class == 'B') {
		if ($score >= 70) {
			$result = 'passed';
		} else {
			$result = 'falied';
		}

	} else if ($class == 'C') {
		if ($score >= 60) {
			$result = 'passed';
		} else {
			$result = 'falied';
		}

	} else if ($class == 'D') {
		if ($score >= 50) {
			$result = 'passed';
		} else {
			$result = 'falied';
		}
	}	
	echo "You are $result ." . PHP_EOL . '';
