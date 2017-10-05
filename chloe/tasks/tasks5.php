<?php 

	$input_class = readline('class' . PHP_EOL);
	$input_score = readline('score? ' . PHP_EOL);


		if ($input_class === 'A'){
			if ($input_score >=80){
				echo "PASS" . PHP_EOL;
			} else if ($input_score < 80){
				echo "FAILED" . PHP_EOL;
			}
		}	else {
			echo "ERROR";
		}

