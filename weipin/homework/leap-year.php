<?php 

	$input = (int)readline("Year:" . PHP_EOL);

	$leap400 = $input % 400 ;
	$leap100 = $input % 100 ;
	$leapYear = $input % 4 ;

	if ( $leap400 == 0 ) {
		echo 'This year is leap year';
	}

	else if ( $leap100 == 0 ) {
		echo 'This year is not leap year';
	}

	else if ( $leapYear == 0 ) {
		echo 'This year is leap year';
	}

	else {
		echo 'This year is not leap year';
	}

 ?>