<?php

//⊗ppPmLpALCh
//урок 62
 
//Задание 1
$arr = [1, 2, 3, 4, 5];
for ($i=0; $i < count($arr); $i++) { 
	$arr[$i] = $arr[$i] ** 2;
	}
var_dump($arr);
echo PHP_EOL;

//Задание 2
$arr = [1, 2, 3, 4, 5];
for ($i=0; $i < count($arr); $i++) { 
	--$arr[$i]   ;
}
var_dump($arr);
echo PHP_EOL;

//Задание 3
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
for ($i=0; $i < count($arr); $i++) { 
	$arr[$i] += 10;
}
var_dump($arr);
echo PHP_EOL;


?>