<?php

//⊗ppPmCdEx
//урок 38 
 

//Задание 1

$min = 41;;
	
if ($min >= 0 && $min < 20) {
	echo 'первая треть';
} 
elseif ($min >= 20 && $min < 40) {
	echo 'вторая треть';}
elseif ($min >= 40 && $min <= 60) {
		echo 'третья треть';}
echo PHP_EOL;

//Задание 2

$arr = [1,2,3];
$sum = 0;	
if (count($arr) == 3 ) {
	for ($i = 0; $i < 3 ; $i++){
		$sum += $arr[$i];
	}
		echo $sum;
} 
else  {
	echo 'в массиве не три элемента';}

echo PHP_EOL;

//Задание 3

$num = 77;
if ($num % 2 == 0) {
	echo 'четное';}
	else {echo 'нечетное';}
echo PHP_EOL;

//Задание 4

$num = 27;
if ($num % 3 == 0) {
	echo 'делится на 3 без остатка';}
	else {echo 'с остатком';}
echo PHP_EOL;
?>