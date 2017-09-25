<?php
$mark = readline('Whats is your mark?' . PHP_EOL);

if ($mark >=100) {
	echo 'invalid number' . PHP_EOL;
} else if ($mark  >= 80  && $mark <= 100) {
	echo 'Class A, Passed' . PHP_EOL;	
} else if ($mark >= 70 && $mark <= 79) {
	echo 'Class B, Passed' . PHP_EOL;
} else if ($mark >= 60 && $mark <= 69) {
	echo 'Class C, Passed' . PHP_EOL;
} else if  ($mark >= 50 && $mark <= 59) {
	echo 'Class D, Passed' . PHP_EOL;
} else if  ($mark >= 0 && $mark <= 49) {
	echo 'Class S, Failed' . PHP_EOL;
}

?>
