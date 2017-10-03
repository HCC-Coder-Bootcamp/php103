<?php

$Grad = readline('Gimme a Grad!!!' . PHP_EOL);

$Result = readline('And a Result!!!' . PHP_EOL);

if ($Result > 100 OR $Result < 0 ) {

	echo "This is not a result" . PHP_EOL;
			
}else{

	if ($Grad == "A" AND $Result == "80" OR
	    $Grad == "B" AND $Result == "70" OR
	    $Grad == "C" AND $Result == "60" OR
	    $Grad == "D" AND $Result == "50" ) {

		echo "Passed";
		
	}else{

		echo "Failed";

	}
}
