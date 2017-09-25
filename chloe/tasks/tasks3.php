<?php 
	
	$input_1 = readline('number 1: ') . PHP_EOL;
	$input_2 = readline('number 2: ') . PHP_EOL;
	$input_3 = readline('number 3: ') . PHP_EOL;

	if ($input_1 > $input_2) {
		if ($input_1 > $input_3) {
			echo "one is the largest no" . PHP_EOL;}
		else
			echo "three is the largest no" . PHP_EOL;
			}	
		
	else 
	{
		if ($input_2 > $input_3){
			echo "two is the largest no" . PHP_EOL;
		}
		else
			echo "three is the largest no" . PHP_EOL;
	}