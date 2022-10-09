<?php

//⊗ppPmCdCS
//урок 31 
 
//Задание 1

$num = 12;
if ($num > 0 && $num < 5) {
    echo '+';
} 	else { echo '-';}
echo PHP_EOL;

//Задание 2

$num = 12;
if ($num >= 10 && $num <= 20) {
    echo '+';
} 	else { echo '-';}
echo PHP_EOL;

//Задание 3

$num1 = 1;
$num2 = 3;
	
if ($num1 <= 1 and $num2 >= 3) {
		echo '+';
	} else {
		echo '-';
	}
echo PHP_EOL;
    
//Задание 12

$num = 3;
		
if (($num > 5 and $num < 10) or $num == 20) {
		echo '+';
	} else {
		echo '-';
	}
echo PHP_EOL;

//Задание 13

$num = 3;
		
if ($num > 5 or ($num > 0 and $num < 3)) {
	    echo '+';
	} else {
	    echo '-';
	}
echo PHP_EOL;

//Задание 14

$num = 3;
		
if (($num == 9 or ($num > 10 and $num < 20)) or ($num > 20 and $num < 30)) {
		echo '+';
	} else {
		echo '-';
	}
echo PHP_EOL;

?>