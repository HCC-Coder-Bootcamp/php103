<?php 	

	$inputMath = readline("Mathematic:" . PHP_EOL);
	$inputLanguage = readline("Language:" . PHP_EOL);
	$inputAccounting = readline("Accounting:" . PHP_EOL);
	$inputScience = readline("Science:" . PHP_EOL);

	$average = number_format(( $inputMath + $inputLanguage + $inputAccounting + $inputScience ) / 4 ) , 2 , ;

	if ( $inputMath > 0 && $inputMath <= 100 && $inputLanguage > 0 && $inputLanguage <= 100 && $inputAccounting > 0 && $inputAccounting <= 100 && $inputScience > 0 && $inputScience <= 100 ) {
		
		if ( $average >= 60 ) {
			echo "Average: " . (string)$average . PHP_EOL . "PASS!";
		}

		else if ( $average < 60 ) {
			echo "Average: " . (string)$average . PHP_EOL . "Fail!";
		}

		else {
			echo "ERROR!";
		}
	}

	else {
		echo "ERROR!";
	}

 ?>