<?php

	$yrs = readline('Input years : ' . PHP_EOL . '');

	if ($yrs % 400 == 0) {

		if ($yrs % 4 == 0) {

			$result = 'is';
		} else {

			$result = 'is not';
		}

	} else {

		$result = 'is not';
	}

	echo 'It ' . $result . ' an leap year. ' . PHP_EOL . '';