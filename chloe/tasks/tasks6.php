<?php 

	//$full_pay = $2000;
	//$part_time_ot = $10;
	//$full_time_ot = $40;
	//$work_week = 4(week);
	//$working_hour = 40(hours);

	$input_time = readline('Your working hours? ' . PHP_EOL);

	$full_pay = $2000;
	$full_time_ot = ($input_time - 40) * 40;
	$full_time_pay = $full_time_ot + 2000;
	$part_time_pay = $input_time * 10;
	
	if ($input_time = 40 ){
		$message = $full_pay . PHP_EOL;
		
	}	else if ($input_time > 40){
		$message = $full_time_pay . PHP_EOL;
	}	else if ($input_time < 40){
		$message = $part_time_pay . PHP_EOL;
	}	else {
		$message = 'INVALID';
	}
echo $message . PHP_EOL;

