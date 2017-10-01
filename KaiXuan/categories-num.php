<?php 
	$num = readline('Please input number = ');
	if ($num >= 0) {
		echo 'positive number  ';
	}else {
		echo "negative number  ";
	};
	$evenNum = $num % 2;
	if ($evenNum == 0) {
		echo "  even number";
	}else {
		echo '  odd number';
	};

?>
