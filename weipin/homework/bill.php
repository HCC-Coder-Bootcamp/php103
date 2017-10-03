<?php 

	$input = (int)readline( "Unit:" . PHP_EOL );

	if ( $input > 0 ) {
		if ( $input > 0 && $input <= 199) {
			$unit = $input * 1.2 ;
		}

		else if ( $input >= 200 && $input < 400 ) {
			$unit = $input * 1.5 ;
		}

		else if ( $input >= 400 && $input < 600) {
			$unit = $input * 1.8 ;
		}

		else if ( $input >= 600 ) {
			$unit = $input * 2;
		}
	}

	else {
		$message = "ERROR!";
	}
	
	if ( $unit >= 400 ) {
		$surcharge = $unit + ($unit * 0.15);
		$message = "Bill: $surcharge" . PHP_EOL;
	}

	else {
		$message = "Bill: $unit" . PHP_EOL;
	}

	echo $message;

 ?>