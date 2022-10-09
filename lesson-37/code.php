<?php

//⊗ppPmCdCm
//урок 37 
 
//Задание 1

$day = 11;
	
if ($day >=1 && $day < 10) {
	echo 'первая декада';
} 
if ($day > 10 && $day <= 20) {
	echo 'вторая декада';}
if ($day > 20 && $day <= 30) {
		echo 'третья декада';}
echo PHP_EOL;

//Задание 2

$day = 21;
	
if ($day >=1 && $day < 10) {
	echo 'первая декада';
} 
elseif ($day > 10 && $day <= 20) {
	echo 'вторая декада';}
elseif ($day > 20 && $day <= 30) {
		echo 'третья декада';}
echo PHP_EOL;

//Задание 3

$day = 41;
	
if ($day >=1 && $day < 10) {
	echo 'первая декада';
} 
elseif ($day > 10 && $day <= 20) {
	echo 'вторая декада';}
elseif ($day > 20 && $day <= 30) {
		echo 'третья декада';}
elseif ($day < 1 || $day >31) {
			echo 'неверное значение переменной $day';}	
echo PHP_EOL;

//Задание 4

$age = 76;
if ($age >10 || $age < 99) {
	echo 'в яблочко';
	echo PHP_EOL;
	$age=(string)$age;
	$sum= $age[0]+$age[1];
	if($sum <= 9){
		echo 'сумма однозначна';
	}
	else {echo 'сумма двузначна';}
} 
echo PHP_EOL;
?>