<?php 

	$inputClass = readline("Class:" . PHP_EOL);
	$inputScore = readline("Score:" . PHP_EOL);

	if ( $inputClass == "a" || "b" || "c" || "d" ) {
		if ( $inputClass == "a" ) {
			if ( $inputScore >= 80 ) {
				echo "PASS!";
			}
			else {
				echo "FAIL!";
			}
		}

		else if ($inputClass == "b" ) {
			if ( $inputScore >= 70 ) {
				echo "PASS!";
			}
			else {
				echo "FAIL!";
			}
		}

		else if ( $inputClass == "c" ) {
			if ( $inputScore >= 60 ) {
				echo "PASS!";
			}
			else {
				echo "FAIL!";
			}
		}

		else if ( $inputClass == "d" ) {
			if ( $inputScore >= 50 ) {
				echo "PASS!";
			}
			else {
				echo "FAIL!";
			}
		}
	}

	else {
		echo "ERROR!";
	}

 ?>