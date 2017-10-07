<?php

$math = readline('math score?' . PHP_EOL);
$language = readline('language score?' . PHP_EOL);
$accounting = readline('accounting score?' . PHP_EOL);

$mark =(($math + $language + $accounting) /3);

if ($mark >=100) {
	echo 'invalid number' . PHP_EOL;
} else if ($mark  >= 60  && $mark <= 100) {
	echo 'Passed' . PHP_EOL;	
} else if ($mark >= 0 && $mark <= 59) {
	echo 'Failed' . PHP_EOL;
}

echo (int)$mark . PHP_EOL;
