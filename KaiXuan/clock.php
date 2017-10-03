<?php 
	$time = readline('Please input time = ');
	if ($time < 12 && $time >= 0) {
		echo "Good Morning";
	}else if ($time == 12) {
		echo "Good Afternoon";
	}else if($time > 12 && $time < 24) {
		echo "Good Evening";
	}else if ($time < 0 || $time > 24) {
		echo "error";
	} ;

?>
