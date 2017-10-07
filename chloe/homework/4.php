<?php 

	$inputNo = readline('Year' . PHP_EOL);

	$year400 = $inputNo % 400;
	$year100 = $inputNo % 100;
	$year = $inputNo % 4;

	if ($year400 == 0){
		$answer = 'LEAP YEAR';
	}else if ($year100 == 0){
		$answer = 'NORMAL';
	}else if ($year == 0){
		$answer = 'LEAP YEAR';
	}else{
		$answer = 'NORMAL';
	}
echo $answer;
	
