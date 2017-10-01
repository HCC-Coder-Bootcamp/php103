<?php 

	$input = readline('International Time:' . PHP_EOL);

	$count = $input % 100;

	$count1 = $input % 10000;

	if ($count < 0 || $count >= 60 || $count1 < 0 || $count1 >= 2400) {
	
		echo 'Error!';

	}

	else if( $input >= 0){

			if ( $input == 0000 ) {
				echo 'Go to sleep, please.';
			}

			else if ( $input < 0600 ) {
				echo 'Go to sleep, please.';
			}

			else if ( $input < 1200 ) {
				echo 'Good Morning';
			}

			else if ( $input < 1800 ) {
				echo 'Good Afternoon';
			}

			else if ( $input < 2200 ) {
				echo 'Good Evening';
			}

			else if ( $input < 2359 ) {
				echo 'Good Night';
			}

			else {
				echo 'Error!';
			}

	}

 ?>