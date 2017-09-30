<?php

	$firstNumber = readline ('First number : ' . PHP_EOL . '');
	$secondNumber = readline ('Second number : ' . PHP_EOL . '');
	$thirdNumber = readline ('Third number : ' . PHP_EOL . '');

	if ($firstNumber > $secondNumber) {

		if ($firstNumber > $thirdNumber) {

			echo 'The biggest number is :' . $firstNumber . PHP_EOL . '';
		
		} else {
		
			echo 'The biggest number is :' . $thirdNumber . PHP_EOL . '';
		
		}
		
	} else {
		
		if ($secondNumber > $thirdNumber) {
		
			echo 'The biggest number is :' . $secondNumber . PHP_EOL . '';

		} else {
		
			echo 'The biggest number is :' . $thirdNumber . PHP_EOL .'';
		
		}
	}