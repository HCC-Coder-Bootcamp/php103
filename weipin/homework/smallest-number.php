<?php 	

	$input1 = readline("Number1:" . PHP_EOL);
	$input2 = readline("Number2:" . PHP_EOL);
	$input3 = readline("Number3:" . PHP_EOL);
	$input4 = readline("Number4:" . PHP_EOL);
	$input5 = readline("Number5:" . PHP_EOL);

	if ( $input1 < $input2 && $input1 < $input3 && $input1 < $input4 && $input1 < $input5 ) {
		echo "The smallest number: " . (string)$input1;
	}

	else if ( $input2 < $input1 && $input2 < $input3 && $input2 < $input4 && $input2 < $input5 ) {
		echo "The smallest number: " . (string)$input2;
	}

	else if ( $input3 < $input1 && $input3 < $input2 && $input3 < $input4 && $input3 < $input5 ) {
		echo "The smallest number: " . (string)$input3;
	}

	else if ( $input4 < $input1 && $input4 < $input2 && $input4 < $input3 && $input4 < $input5 ) {
		echo "The smallest number: " . (string)$input4;
	}

	else if ( $input5 < $input1 && $input5 < $input2 && $input5 < $input3 && $input5 < $input4 ) {
		echo "The smallest number: " . (string)$input5;
	}

	else {
		echo "ERROR!";
	}

 ?>