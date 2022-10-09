<?php

//⊗ppPmLpAF
//урок 61 
 
//Задание 1
$arr = ['a', 'b', 'c', 'd', 'e'];
for ($i=0; $i < count($arr); $i++) { 
	echo $arr[$i];
}
echo PHP_EOL;

//Задание 2
$arr = ['a', 'b', 'c', 'd', 'e'];
for ($i=1; $i < count($arr); $i++) { 
	echo $arr[$i];
}
echo PHP_EOL;

//Задание 3
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
for ($i=0; $i < count($arr) / 2; $i++) { 
	echo $arr[$i];
}
echo PHP_EOL;

//Задание 4
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
	$sum = 0;
	
	for ($i = 0; $i < count($arr); $i++) {
		$sum += $arr[$i];
	}
	
echo $sum;
?>