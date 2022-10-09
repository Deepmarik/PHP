<?php

//⊗ppPmLpALF
//урок 60 
 
//Задание 1
$arr = [];
$arr[] = 1;
$arr[] = 2;
$arr[] = 3;
$arr[] = 4;
$arr[] = 5;
$arr[] = 6;
$arr[] = 7;
$arr[] = 8;
$arr[] = 9;
$arr[] = 10;
var_dump($arr);
echo PHP_EOL;

//Задание 2
$arr = [];
$arr[] = 'x';
$arr[] = 'x';
$arr[] = 'x';
$arr[] = 'x';
$arr[] = 'x';
var_dump($arr);
echo PHP_EOL;

//Задание 3
$arr = [];
for ($i=1; $i <= 100; $i++) { 
	$arr[] = $i;
}
var_dump($arr);

//Задание 4
$arr = [];
for ($i=1; $i <= 99; $i += 2) { 
	$arr[] = $i;
}
var_dump($arr);
?>