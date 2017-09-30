<?php 

/* Greeting machine
Accept input of time in international hour and minutes.
Say “Good morning” if it is morning, “Good afternoon” when it is noon, “Good evening”
when it is evening and night.
Reject if given is invalid time.**/

$inputTime = readline('Input international time : ' .PHP_EOL . '');

	$minutes = $inputTime % 100 ;
	$hour = ($inputTime - $minutes) / 100 ;

	if ($hour < 0 || $hour > 23 || $minutes > 59) {

		$greeting = 'Error! ' ;

	} else if ($hour < 12) {

		$greeting = 'Good morning! ' . '';

	} else if ($hour < 18) {

		$greeting = 'Good afternoon! ' . '';

	} else if ($hour <= 23) {

		$greeting = 'Good evening! ' . '';

	}

		echo $greeting . '';