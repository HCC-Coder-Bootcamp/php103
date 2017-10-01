<?php

echo 'Can i have your subjects score?' . PHP_EOL;

$Math = readline('Mathematic ' . PHP_EOL);

$Language = readline('Language ' . PHP_EOL);

$Account = readline('Accounting ' . PHP_EOL);

$Science = readline('Science ' . PHP_EOL);

$Result = ($Math + $Language + $Account + $Science) / 4 ;

if ($Math > 100 || $Math < 0 || $Language > 100 || $Language < 0 || $Account > 100 || $Account < 0 || $Science > 100 || $Science < 0) {

	echo "This is an incorrect score";

} else {	

	if ($Result > 60) {

		echo "Average $Result Passed!";

	}else{

		echo "Average $Result Failed";

	}

}

	

