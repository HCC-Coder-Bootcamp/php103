<?php

	$math = readline('Score of Mathematic : ' . PHP_EOL . '');
	$lang = readline('Score of Language : ' . PHP_EOL . '');
	$acc = readline('Score of Accounting : ' . PHP_EOL . '');
	$sn = readline('Score of Science : ' . PHP_EOL . '');

	
	if ($math < 0 || $math > 100 || $lang < 0 || $lang > 100 || $acc < 0 || $acc > 100 || $sn < 0 || $sn > 100) {

		echo 'Invalid score,please re-enter';

	} else {

		$totalSocres = $math + $lang + $acc + $sn;
		$Avg = $totalSocres / 4;

		if ($Avg >= 60) {

			$result = "passed";
		} else {

			$result = "falied";
		}

		echo "You are $result. " . PHP_EOL . '';
	}

