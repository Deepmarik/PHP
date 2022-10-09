<?php

//⊗ppPmLpFN
//урок 65

//Задание 1
$one = 0;
$two = 1;
$curent = 1;
for ($i= 1; $i < 10; $i++) { 
	$curent = $one + $two;
	echo $curent;
	$one = $two;
	$two = $curent;
	echo PHP_EOL;
}
echo PHP_EOL;

//Задание 2

$one = 0;
$two = 1;
$three = 2;
$curent ;
for ($i = 1; $i < 10; $i++) { 
	$curent = $one + $two + $three;
	echo $curent;
	$one = $two;
	$two = $three;
	$three = $curent;
	echo PHP_EOL;
}
echo PHP_EOL;

?>