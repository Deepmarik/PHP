<?php

//⊗ppPmCdPrm
//урок 39 
 

//Задание 1

$month = 12;

switch ($month){
	case $month <3 || $month == 12:
	echo 'зима';
	break;
	case $month >= 3 && $month < 6:
		echo 'весна';
		break;
	case $month >= 6  && $month < 9:
		echo 'лето';
		break;
	case $month > 9  && $month <= 11:
			echo 'осень';
			break;
}
echo PHP_EOL;

//решение с if-else

if ($month <3 || $month == 12){
	echo 'зима';
} elseif ($month >= 3 && $month < 6){
	echo 'весна';
} elseif ($month >= 6  && $month < 9){
	echo 'лето';
} elseif ($month > 9  && $month){
	echo 'осень';
}
echo PHP_EOL;

//Задание 2

$str = 'abcde';
	
if ($str[0] == 'a' ) {
	echo 'a -первая буква';
} 
else  {
	echo 'не первая';}

echo PHP_EOL;

//Задание 3

$num = 12345;
$str = (string)$num;
if ($str[0] >= 1 ||  $str[0] <= 3) {
	echo 'начинается с 1 или 2 или 3';}
else {echo 'другое число';}
echo PHP_EOL;

//Задание 4

$num = 2700;
$str = (string)$num;
$sum=0;
if (strlen($str) == 3 ) {
	
	$sum = (int)$str[0] + (int)$str[1] +(int)$str[2];
	echo $sum;}
else {
		echo 'число нетрехзначное';
	}
echo PHP_EOL;

//Задание 5

$num = 270325;
$str = (string)$num;
$sum1 =0;
$sum2 =0;
if (strlen($str) == 6 ) {
	for( $i =0 ; $i <3; $i++){
		$sum1 += (int)$str[$i];
	}
	for( $i =3 ; $i <6; $i++){
		$sum2 += (int)$str[$i];
	}
		if ($sum1 == $sum2){
			
			echo 'суммы равны';
		}
		else {echo 'суммы не равны';}
	
}
else {
		echo 'число нешестизначное';
	}
echo PHP_EOL;

?>