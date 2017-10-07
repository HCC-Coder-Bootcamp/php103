<?php

$year = readline('number of year?' . PHP_EOL);

if ($year % 4 == 0) {
	echo 'leap year' . PHP_EOL;
} elseif ($year % 4 != 0) {
	echo 'normal' . PHP_EOL;
}