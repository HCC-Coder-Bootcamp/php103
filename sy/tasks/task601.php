<?php

	$workingHour = readline('Your weekly working hour :' . PHP_EOL . '');

	$mthWorkingHour = $workingHour * 4;

	if ($mthWorkingHour <= 0) {

		$greeting = 'please get out form here';

	} else if ($mthWorkingHour >= 160) {

		$greeting = 'full time worker';
	} else {

		$greeting = 'part time worker';
	}

	echo 'Hi, ' . $greeting . '. ' . PHP_EOL . '';

	$basicSalary = 2000;
	$otRate = 40;
	$ot = ($mthWorkingHour - 160) * $otRate;

	$hourlyRate = $mthWorkingHour * 10;

	if ($mthWorkingHour <= 0) {

		$salary = '0';
	} else if ($mthWorkingHour == 160) {

		$salary = $basicSalary;
	} else if ($mthWorkingHour < 160) {

		$salary = $basicSalary + $ot;
	} else {

		$salary = $hourlyRate;
	}

	echo 'You this month salary is ' . $salary . PHP_EOL . '';