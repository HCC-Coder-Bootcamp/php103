<?php
		
	$number1 = readline('First number : ' . PHP_EOL . '');
		$smallest = $number1;

	$number2 = readline('Second number : ' . PHP_EOL . '');
		if ($number2 <= $smallest) {
			$smallest = $number2;
		}
	$number3 = readline('Third number : ' . PHP_EOL . '');
		if ($number3 <= $smallest) {
			$smallest = $number3;
		}
	$number4 = readline('Four number : ' . PHP_EOL . '');
		if ($number4 <= $smallest) {
			$smallest = $number4;
		}
	$number5 = readline('Five number : ' . PHP_EOL . '');
		if ($number5 <= $smallest) {
			$smallest = $number5;
		}
	echo "The smallest number is $smallest ." . PHP_EOL . '';