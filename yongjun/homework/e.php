<?php

$priceBelow199 = 1.2;
$priceBelow400 = 1.5;
$priceBelow600 = 1.8;
$priceAbove600 = 2.0;

// More than $400 surcharge 15%, minimum $100

echo "

 .--. .-.              .-.       _         .---.  _ .-.  .-.  
: .--': :             .' `.     :_;        : .; ::_;: :  : :  
: `;  : :   .--.  .--.`. .'.--. .-. .--.   :   .'.-.: :  : :  
: :__ : :_ ' '_.''  ..': : : ..': :'  ..'  : .; :: :: :_ : :_ 
`.__.'`.__;`.__.'`.__.':_; :_;  :_;`.__.'  :___.':_;`.__;`.__;" . PHP_EOL . PHP_EOL;

$electricUsed = readline('Please enter the unit of electric that you used: ');
$price = 0;
if ($electricUsed > 600) {
	$price += ($electricUsed - 599) * $priceAbove600;
	$electricUsed = 599;
}
if ($electricUsed < 600 && $electricUsed >= 400) {
	$price += ($electricUsed - 399) * $priceBelow600;
	$electricUsed = 399;
}
echo $price;
if ($electricUsed < 400 && $electricUsed >= 200) {
	$price += ($electricUsed - 199) * $priceBelow400;
	$electricUsed = 199;
}
echo $price;
if ($electricUsed < 200) {
	$price += $electricUsed * $priceBelow199;
}
if ($price < 100)$price = 0;
if ($price >= 400)$price *= 1.15;


echo "The electric bill is $price $, please pay as soon as possible!" . PHP_EOL;