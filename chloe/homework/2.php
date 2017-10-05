<?php 

	$inputDigit1 = readline('Digit_1: ' . PHP_EOL);
	$inputDigit2 = readline('Digit_2: ' . PHP_EOL);
	$inputDigit3 = readline('Digit_3: ' . PHP_EOL);
	$inputDigit4 = readline('Digit_4: ' . PHP_EOL);
	$inputDigit5 = readline('Digit_5: ' . PHP_EOL);

	if ($inputDigit1 < $inputDigit2 &&$inputDigit1 < $inputDigit3 &&
		$inputDigit1 < $inputDigit4 &&$inputDigit1 < $inputDigit5){
		$message = $inputDigit1;
	}else if ($inputDigit2 < $inputDigit1 &&$inputDigit2 < $inputDigit3 &&
			  $inputDigit2 < $inputDigit4 &&$inputDigit2 < $inputDigit5){
		$message = $inputDigit2;
	}else if ($inputDigit3 < $inputDigit1 &&$inputDigit3 < $inputDigit2 &&
			  $inputDigit3 < $inputDigit4 &&$inputDigit3 < $inputDigit5){
		$message = $inputDigit3;
	}else if ($inputDigit4 < $inputDigit1 &&$inputDigit4 < $inputDigit2 &&
			  $inputDigit4 < $inputDigit3 &&$inputDigit4 < $inputDigit5){
		$message = $inputDigit4;
	}else{
		$message = $inputDigit5;
	}
echo "$message is the smallest digit.";


