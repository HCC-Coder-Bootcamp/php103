<?php

echo "Hi student! This is a average score machine. Please enter your subjects' 
score to me and I will calculate the average score for you." . PHP_EOL;

$mathematicScore = (float)readline('What is your score for Math?      ' . PHP_EOL);
$languageScore   = (float)readline('What is your score for Language?  ' . PHP_EOL);
$accountingScore = (float)readline('WHat is your score for Accounting?' . PHP_EOL);
$scienceScore    = (float)readline('What is your score for Science?   ' . PHP_EOL);

$totalScore   = $mathematicScore + $languageScore + $accountingScore + $scienceScore;
$averageScore = $totalScore / 4;

if ($mathematicScore > 100 || $languageScore > 100 ||
	$accountingScore > 100 || $scienceScore > 100) {
	$messege = "REJECT! Invalid input out of range!";
} else {

	if ($averageScore >= 60) {
		$messege = "Your average score is " . 
		number_format((float)$averageScore, 2, '.', '') . "%.";
	} else if ($averageScore < 60) {
		$messege = "Work hard next time!!";
	}
}
echo $messege;