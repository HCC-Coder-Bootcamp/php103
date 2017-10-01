<?php 

	$inputHour = readline("Hours of working(month):" . PHP_EOL);

	if ( $inputHour < 160) {
		$count = 160 - $inputHour;
		$count1 = $count * 10;
		echo "Part time hourly rate $10" . PHP_EOL;
		echo "Salary " . (string)$count1;
	}

	else if ( $inputHour == 160) {
		echo "This month salary: $2000";
	}

	else if ( $inputHour > 160 ) {
		$count2 = $inputHour - 160;
		$count3 = $count2 * 40;//OT
		$total = 2000 + $count3;
		echo "OT hourly rate $40" . PHP_EOL;
		echo "Salary $2000 + OT " . $count3 . PHP_EOL;
		echo "Salary total $" . (string)$total;
	}

 ?>