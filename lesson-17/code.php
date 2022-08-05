<?php
	//⊗ppPmBsSCh
	//урок 17 
	 
	//Задание 1

	$str = 'abcde';
	echo $str[0];
	echo $str[2];
	echo $str[4];
	echo PHP_EOL;

	//Задание 2

	$str = 'abcde';
	$str = $str[4].$str[3].$str[2].$str[1].$str[0];
	echo $str;
	echo PHP_EOL;
		
	//Задание 3

	$str = 'abcde';
	$num = 2;
	echo $str[$num];
	echo PHP_EOL;

	//Задание 4

	$str = 'abcdef';
	echo $str[strlen($str) - 1];
	echo PHP_EOL;

	//Задание 5

	$str = 'abcdef';
	echo $str[strlen($str) - 2];
	echo PHP_EOL;

	//Задание 6

	$str = 'abcdef';
	echo $str[strlen($str) - 3];
	echo PHP_EOL;

	//Задание 7

	$str = '12345';
	echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4] ;
	echo PHP_EOL;

	//Задание 8

	$str = 12345;
	$str = (string)$str;
	echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4] ;
	echo PHP_EOL;

	//Задание 9

	$str = 12345;
	$str = (string)$str;
	echo $str[0] * $str[1] * $str[2] * $str[3] * $str[4] ;
	echo PHP_EOL;

	//Задание 10

	$str = 12345;
	$str = (string)$str;
	echo (int)($str[4] . $str[3] . $str[2] . $str[1] . $str[0] );
	echo PHP_EOL;
?>