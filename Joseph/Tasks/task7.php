<?php

$inputScore = (int)readline('What is your score?' . PHP_EOL);

if ($inputScore < 50) {
	echo "You Fail.";
} else {

	if ($inputScore <= 59)
		$validate = "D";
	else if ($inputScore <= 69)
		$validate = "C";
	else if ($inputScore <= 79)
		$validate = "B";
	else if ($inputScore <= 100)
		$validate = "A";

	echo "You get $validate.";
}