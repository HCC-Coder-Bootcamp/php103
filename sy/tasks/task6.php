<?php

	$inputHours = readline('Let me know you total working hour in a month. ' . PHP_EOL . '');

	$fullTimeBasic = '2000';
	$fullTimeOT = '40';
	$partTimePayRate = '10';

	if ($inputHours > 448) {

		echo 'Are you zombie? ';

	} else {
		//4 week and 40 hour per week = 160 hour per month for fulltime worker
		if ($inputHours >= 160) {

			$greeting = 'Hi fulltime worker, ';

			if ($inputHours == 160) {

				$totalSalary = $fullTimeBasic ;

			} else if ($inputHours > 160) {

				$OTHour = ($inputHours - 160);

				$OTSalary = $OTHour * $fullTimeOT ;

				$totalSalary = $fullTimeBasic + $OTSalary ;
			}
		} else {

			$greeting = 'Hi partime worker, ';

			$totalSalary = $inputHours * $partTimePayRate;

		}

		echo $greeting . PHP_EOL . 'Your salary on this month is ' . $totalSalary . ' . ' . PHP_EOL . '';
	}
	