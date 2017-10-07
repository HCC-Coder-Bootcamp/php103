<?php 
	
	$input = readline('unit? ' . PHP_EOL);

	//$price199 = $unit * 1.2;
	//$price400 = $unit * 1.5;
	//$price600 = $unit * 1.8;
	//$priceABV = $unit * 2.0;

	if ( $input <= 199 && $input >= 0 ) {
			$unit = $input * 1.2;
		}
		else if ( $input < 400 && $input >= 200 ) {
			$unit = $input * 1.5;
		}
		else if ( $input >= 400 && $input < 600) {
			$unit = $input * 1.8;
		}
		else if ( $input >= 600 ) {
			$unit = $input * 2.0;
	}
		else if {
			$message = "invalid";
	}
	
		else if ( $unit >= 400 ) {
			$charge = ($unit * 0.15) + $unit;
			$message = " $charge " . PHP_EOL;
	}
	else {
		$message = " $unit " . PHP_EOL;
	}
	echo $message;
