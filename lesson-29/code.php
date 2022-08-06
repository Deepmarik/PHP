<?php
	//⊗ppPmCdIE
	//урок 29 
	 
	//Задание 1

	$test = 12;
	if ($test > 10) {
		echo '+';
	} 	else { echo '-';}
	echo PHP_EOL;

	//Задание 2

	$test = 19;
	if ($test < 10) {
		echo '+';
	} 	else { echo '-';}
	echo PHP_EOL;

	//Задание 3

	$test = 10;
	if ($test <= 10) {
		echo '+';
	}	else { echo '-';}
	echo PHP_EOL;
		
	//Задание 4

	$test = 10;
	if ($test >= 10) {
		echo '+';
	}	else { echo '-';}
	echo PHP_EOL;

	//Задание 5

	$test = 10;
	if ($test == 10) {
		echo '+';
	}	else { echo '-';}
	echo PHP_EOL;

	//Задание 6

	$test = 10;
	if ($test != 10) {
		echo '+';
	}	else { echo '-';}
	echo PHP_EOL;

	//Задание 7
	$test1 = 1;
	$test2 = 2;
	
	if ($test2 > $test1) {
		echo 'test2 больше'; // сработает это, так как $test2 больше $test1
	} else {
		echo 'test1 больше';
	}
?>