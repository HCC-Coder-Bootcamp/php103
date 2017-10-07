<?php

echo "Electricity bill calculator" . PHP_EOL .
	 "Please insert the unit you're consumed ". PHP_EOL ;

$Unit = readline("Unit " . PHP_EOL);

////////////////////////////////////////////////////

$Unit1To199 = $Unit * 1.20;

$Unit200To399 = $Unit * 1.50;

$Unit400To599 = $Unit * 1.80;

$Unit600Above = $Unit * 2.00;

/////////////////////////////////////////////////////

$Surcharge200To399 = $Unit200To399 * 15 /100;

$Surcharge400To599 = $Unit400To599 * 15 /100;

$Surcharge600Above = $Unit600Above * 15 /100;

/////////////////////////////////////////////////////

$Amount200To399 = $Surcharge200To399 + $Unit200To399;

$Amount400To599 = $Surcharge400To599 + $Unit400To599;

$Amount600Above = $Surcharge600Above + $Unit600Above;

/////////////////////////////////////////////////////

if ($Unit > 0 AND $Unit <= 83){

	echo "Your bill is $100";

}else if ($Unit >= 84 AND $Unit <= 199){

	echo "Unit per $1.50" .PHP_EOL.
		 "Total Amount : $ $Unit1To199";

}else if ($Unit >= 200 AND $Unit <= 266) {
	
	echo "Unit per $1.50" .PHP_EOL.
	     "Total Amount : $ $Unit200To399";

}else if ($Unit >= 267 AND $Unit <= 399) {

	echo "Unit per $1.50" .PHP_EOL.
		 "Surcharge    : $ " . number_format((float)$Surcharge200To399, 2, '.', '').PHP_EOL.
		 "Total Amount : $ " . number_format((float)$Amount200To399, 2, '.', '');

}else if ($Unit >= 400 AND $Unit <= 599) {
	
	echo "Unit per $1.80" .PHP_EOL.
		 "Surcharge    : $ " . number_format((float)$Surcharge400To599, 2, '.', '').PHP_EOL.
		 "Total Amount : $ " . number_format((float)$Amount400To599, 2, '.', '');

}else if ($Unit >= 600) {
	
	echo "Unit per $2.00" .PHP_EOL.
		 "Surcharge    : $ " . number_format((float)$Surcharge600Above, 2, '.', '').PHP_EOL.
		 "Total Amount : $ " . number_format((float)$Amount600Above, 2, '.', '');

}else{

	echo "ERROR";
}
