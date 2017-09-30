<?php

echo "Hi student! This is a test score validator. When you input your score, and I will let you know your score status." . PHP_EOL;

$inputScore = (int)readline('What is your score?' . PHP_EOL);

if ($inputScore < 50) {
	echo "Work harder next time!";
} else {

	if ($inputScore <= 59) {
		$validate = "D";
	} else if ($inputScore <= 69) {
		$validate = "C";
	} else if ($inputScore <= 79) {
		$validate = "B";
	} else if ($inputScore <= 100) {
		$validate = "A";
	}

	echo "Congratulation!! You passed your test, and you get $validate.";
}