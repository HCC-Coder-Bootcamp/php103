<?php

echo 'How long are you working this month?!!' . PHP_EOL;

$WorkingTime = readline('Hour' . PHP_EOL);

$PartTime= $WorkingTime*10;

$FullTime= (($WorkingTime-40)*40)+2000;

if ($WorkingTime < 40 && $WorkingTime > 0 ) {

	echo "Part Time, your salary is $PartTime" . PHP_EOL;

} else if ($WorkingTime >= 40 && $WorkingTime <= 672 ) {

	echo "Full Time, your salary is $FullTime" . PHP_EOL;

}else{

	echo "Bro you are out of working time! Take a break first";
	
}
