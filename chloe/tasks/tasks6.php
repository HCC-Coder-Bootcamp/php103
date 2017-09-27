<?php 

	//$full_pay = $2000;
	//$part_time_ot = $10;
	//$full_time_ot = $40;
	//$work_week = 4(week);
	//$working_hour = 40(hours);

	$input_time = readline('How long for your working time? ' . PHP_EOL);

	$full_time_ot = ($input_time - 40) * 40;
	$part_time_ot = $input_time * 10;
	$full_time_pay = $full_time_ot + 2000;
	
	if ($input_time <= 40 ){
		echo "(Part time)" . PHP_EOL;
		echo "Salary $part_time_ot" . PHP_EOL;
	}	else if ($input_time >= 40){
		echo "(Full time)" . PHP_EOL;
	}	else {
		echo "ERROR" . PHP_EOL;
	}

