<?php
$x1 = readline('x1' . PHP_EOL);
$y1 = readline('y1' . PHP_EOL);

(int)$distances = (sqrt(((79-$x1)*(79-$x1))-((52-$y1)*(52-$y1))));

echo (int)$distances . PHP_EOL;

if ($distances  >= 3  && $distances <= 10){
	echo 'warning' . PHP_EOL;
} elseif ($distances  >=0   && $distances <= 2){
	echo "\x07";
}


?>
