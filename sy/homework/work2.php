<?php

	$number1 = readline('First number : ' . PHP_EOL . '');
	$number2 = readline('Second number : ' . PHP_EOL . '');
	$number3 = readline('Third number : ' . PHP_EOL . '');
	$number4 = readline('Four number : ' . PHP_EOL . '');
	$number5 = readline('Five number : ' . PHP_EOL . '');

	if ($number1 <= $number2 && $number1 <= $number3 && $number1 <= $number4 && $number1 <= $number5) {

		$result = "$number1 is smallest"; 

	} else if ($number2 <= $number3 && $number2 <= $number4 && $number2 <= $number5) {

		$result = "$number2 is smallest";

	} else if ($number3 <= $number4 && $number3 <= $number5) {

		$result = "$number3 is smallest";

	} else if ($number4 <= $number5) {

		$result = "number4 is smallest";

	} else if ($number5 <= $number1 && $number5 <= $number2 && $number5 <= $number3 && $number5 <= $number4) {

		$result = "$number5 is smallest";

	} 

	echo $result . ' number. ' . PHP_EOL . '';