<?php
	$FTsalary = 2000;
	$PTsalary = 10;	
	$totalHours = readline('How many hours you work? = ');
	if ($totalHours == 140) {
		
		echo 'Your are full time and your salary amount is $' . $FTsalary;
	
	}else if ($totalHours > 140) {
		
		$ot = ($totalHours - 140) * 40 ;
		$totalFTsalary = $ot + $FTsalary;
		
		echo 'Your are full time and your salary amount is $' . $totalFTsalary ;
	
	}else if ($totalHours > 0) {
		
		$totalPTsalary = $PTsalary * $totalHours;
		
		echo 'Your are part time and your salary amount is $' . $totalPTsalary;
	
	}else {
		echo "Error";
	};

?>
