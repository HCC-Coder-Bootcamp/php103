<?php

	$enemyPointX = readline('Enemy position X :' . PHP_EOL . '');
	$enemyPointY = readline('Enemy position Y :' . PHP_EOL . '');

	$minePointX = '79';
	$minePointY = '52';

	$distanceMine = sqrt(pow ($minePointX,2) + pow($minePointY, 2));
	$distanceEnemy = sqrt(pow($enemyPointX,2) + pow($enemyPointY, 2));

	$radar = $distanceMine - $distanceEnemy;

	if ($radar <= 2 || $radar <= -2) {

		$warning = 'You be attacked!!! ' . "\x07" . "\x07" . "\x07" . "\x07" . "\x07" . PHP_EOL . '' ;

	} else if ($radar <= 10 || $radar <= -10) {
		$warning = 'Warning! Enemy is coming! ' . "\x07" . "\x07" . "\x07" . PHP_EOL . '';

	} else {
		$warning = 'Enemy searching...' . "\x07" . "\x07" . PHP_EOL . '';

	}

	 echo $warning . PHP_EOL . '';