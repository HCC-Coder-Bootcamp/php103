<?php

echo "Hi user! This is a electricity bill calculator." . PHP_EOL .
"Let me know how many unit do you spend a month, 
and I will let you know the bill." . PHP_EOL;

$inputUnit = (int)readline('How many unit do you spend for this month?' . PHP_EOL);

$charge1     = 1.2;
$charge2     = 1.5;
$charge3     = 1.8;
$charge4     = 2;
$minimumBill = 100;

if ($inputUnit <= 0) {
	$messege = "REJECT!";
} else if ($inputUnit < 84) {
	$billFee = $minimumBill;
} else if ($inputUnit < 200) {
	$billFee = $inputUnit * $charge1;
} else if ($inputUnit < 400) {
	$billFee = $inputUnit * $charge2;
} else if ($inputUnit < 600) {
	$billFee = $inputUnit * $charge3;
} else if ($inputUnit > 600) {
	$billFee = $inputUnit * $charge4;
}

if ($billFee > 400) {
	$surchargeBill = ($billFee * 0.15) + $billFee;
	$messege = "Your bill is $" . number_format((float)$surchargeBill, 2, '.', '') . ".";
} else {
	$messege = "Your bill is $" . number_format((float)$billFee, 2, '.', '') . ".";
}
echo $messege;