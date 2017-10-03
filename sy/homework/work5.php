<?php

	$unit = readline('Please enter your electric units :' . PHP_EOL . '');

	if ($unit <= 199) {

		$amt = $unit * 1.2;

		if ($amt <= 100) {

			$pymt = "100";
		} else {

			$pymt = $amt;
		}

	} else if ($unit >= 200 && $unit < 400) {

		$amt = $unit * 1.5;

		if ($amt >= 400) {
			$pymt = ($amt * 0.15) + $amt;

		} else {
			$pymt = $amt;
		}

	} else if ($unit >= 400 && $unit < 600) {

		$amt = $unit * 1.8;

		$pymt = ($amt * 0.15) + $amt;

	} else {

		$amt = $unit * 2.0;

		$pymt = ($amt *0.15) + $amt;
	}

	echo "Total amount you need to pay is $pymt. " . PHP_EOL . '';