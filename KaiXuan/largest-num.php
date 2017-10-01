<?php 
	$num1 = readline('Please input number 1 = ');
	$num2 = readline('Please input number 2 = ');
	$num3 = readline('Please input number 3 = ');
	if ($num1 > $num2 && $num1 > $num3) {
		echo $num1;
	}else if ($num2 > $num1 && $num2 > $num3) {
		echo $num2;
	}else{
		echo $num3;
	};
?>
