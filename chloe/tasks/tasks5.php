<?php 

	$input_score = readline('score? ' . PHP_EOL);

		if ($input_score >= 80 ) {
			echo "A (Very Good)";

		}	else if ($input_score >= 70) {
			echo "B (No Bad)";

		}	else if ($input_score >= 60) {
			echo "C (Fighting)";

		} 	else if ($input_score >= 50) {
			echo "D (Keep Working)";

		} 	else if ($input_score >= 1) {
			echo "F (YOU FAIL)";

		}	else if ($input_score >= 0) {
			echo "Absent";

		}	else {
			echo "ERROR";
		}

