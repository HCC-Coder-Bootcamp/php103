<?php 
	
	$scoreMath = readline('math ?'    . PHP_EOL);
	$scoreLang = readline('language'  . PHP_EOL);
	$scoreAcc  = readline('acc ?'     . PHP_EOL);
	$scoreSc   = readline('science ?' . PHP_EOL);

	$average = ($scoreMath + $scoreLang + $scoreAcc + $scoreSc) / 4;
	
	if ($average >= 60) {
		$message  = 'Awesome!! This is your result $average.' . PHP_EOL;
	} 
	else if ($average > 0) {
		$message = 'Fine. You can do better.' . PHP_EOL;
	}	
	else {
		$message = 'You input wrong no.' . PHP_EOL;
	}

echo "$message". PHP_EOL;