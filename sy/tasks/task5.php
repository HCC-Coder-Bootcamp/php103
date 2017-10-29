<?php

	$class = readline('You class : ');
	$score = readline('You Score :');

	if ($class == 'A' || $class == 'a') {
		if ($score >= 80) {
			$result = 'passed';
		}else {
			$result = 'falied';
		}

	} else if ($class == 'B' || $class == 'b') {
		if ($score >= 70) {
			$result = 'passed';
		} else {
			$result = 'falied';
		}

	} else if ($class == 'C' || $class == 'c') {
		if ($score >= 60) {
			$result = 'passed';
		} else {
			$result = 'falied';
		}

	} else if ($class == 'D' || $class == 'd') {
		if ($score >= 50) {
			$result = 'passed';
		} else {
			$result = 'falied';
		}
	} else {

		$result = 'not our school student';
	}	
	echo "You are $result ." . PHP_EOL . '';
