<?php

//⊗ppPmLpFe
//урок 48 
 
//Задание 1
$arr = ['a', 'b', 'c', 'd', 'e'];
	
foreach ($arr as $elem) {
	echo $elem;
	echo PHP_EOL;
}

echo PHP_EOL;

//Задание 2

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$result = 0;	
foreach ($arr as $elem) {
	$result += $elem;
}
echo $result;
echo PHP_EOL;

//Задание 3

$result = 0;
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($arr as $elem) {
	$result += $elem;
}
echo $result / count($arr);
echo PHP_EOL;

?>