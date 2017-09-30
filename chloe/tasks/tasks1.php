<?php 

	$input = readline('time' . PHP_EOL);

	$minutes = $input % 100;
	$hours = ($input - $minutes) / 100;

	if ($minutes >= 60) {
		echo "ERROR" . PHP_EOL;
	}

	else if ($input <= 0) {
		echo "you are sikina" . PHP_EOL;
	}

		else if ($input < 1200) {
			echo 'Good Morning' . PHP_EOL;
			}

		else if ($input < 1600) {
			echo "Good Afternoon" . PHP_EOL;
			}

		else  if ($input < 2200) {
			echo "Good Evening" . PHP_EOL;
			}

		else if ($input < 2400) {
			echo "Good Night" . PHP_EOL;
		}

		else {
			echo "ERROR" . PHP_EOL;
		}
 