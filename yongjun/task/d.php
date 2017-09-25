<?php

// Radar distance detector

// Mine Position
$mineX = 79;
$mineY = 52;

// Receive Input
echo 'Please input the enemy position,' . PHP_EOL;
$x = readline('x-coordinate : ');
$y = readline('y-coordinate : ');

// Compute Distance
$distance = sqrt(pow($mineX - $x, 2) + pow($mineY - $y, 2));

// Conditioning
if ($distance > 10) {
	$status = 'Safe';
} else if ($distance > 2) {
	$status = 'Warning';
} else {
	$status = system("osascript -e 'beep'");;
}

echo $status . PHP_EOL;

?>