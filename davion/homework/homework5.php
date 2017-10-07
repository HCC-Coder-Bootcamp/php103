<?php 

$unit = readline('number of unit?' . PHP_EOL);

if ($unit  >= 1 && $unit <= 199) {
	$price = $unit * 1.2 . PHP_EOL;
	echo $price . PHP_EOL;
} elseif ($unit >= 200 && $unit <= 400) {
	$price = ((( $unit - 200) * 1.5) + 238.8) . PHP_EOL;
	echo $price . PHP_EOL;
} elseif	($unit >= 400 && $unit <= 600) {
	$price = ((( $unit - 400) * 1.8) + 238.8 + 300) . PHP_EOL;
	echo $price . PHP_EOL;
} elseif	($unit >= 600) {
	$price = ((( $unit - 600) * 2.0) + 238.8 + 300 + 360) . PHP_EOL;
	echo $price . PHP_EOL;	
}


if ($price <= 400) {
	echo 'no tax' . PHP_EOL;
} elseif ($price >= 400) {
	$price1 = (($price * 0.15) + $price);
	echo $price1 . PHP_EOL;
}
 ?>