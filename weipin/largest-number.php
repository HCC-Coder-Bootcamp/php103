<?php 

	$input1 = readline("Number1:" . PHP_EOL);
	$input2 = readline("Number2:" . PHP_EOL);
	$input3 = readline("Number3:" . PHP_EOL);

	if ( $input1 > $input2 && $input1 > $input1 ) {
		echo "The largest number is: " . $input1;
	}

	else if ( $input2 > $input1 && $input2 > $input3 ) {
		echo "The largest number is: " . $input2;
	}

	else if ( $input3 > $input1 && $input3 > $input2 ) {
		echo "The largest number is: " . $input3;
	}

	else {
		echo "ERROR!";
	}

 ?>