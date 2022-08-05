<?php
	//⊗ppPmBsPrmO
	//урок 20 
	 
	//Задание 1

	//секунд в сутках
	$sek = 60 ** 2 * 24;
	echo $sek;
	echo PHP_EOL;
	
	//Задание 2

	//в 30 днях;
	echo $sek * 30;
	echo PHP_EOL;

	//Задание 3
	
	//в 365 днях;
	echo $sek * 365;
	echo PHP_EOL;

	//Задание 4
	
	//минут в сутках;
	$min=60 * 24;
	echo $min;
	echo PHP_EOL;

	//Задание 5
	
	//минут в году;
	echo $min * 365;
	echo PHP_EOL;

	//Задание 6
	
	//количество байт в мегабайте
	$mega = 2 ** 20;
	echo $mega;
	echo PHP_EOL;

	//Задание 7
	
	//количество байт в гигабайте
	
	//echo PHP_EOL;
	$giga = $mega *2 ** 10;
	echo $giga;
	echo PHP_EOL;

	//Задание 8
	
	//количество байт в 10 гигабайтах
	echo $giga * 10;
	echo PHP_EOL;

	//Задание 9
	
	// байт в терабайте
	$tera = $giga * 2 ** 10;
	echo $tera;
	echo PHP_EOL;

	//Задание 10
	
	// килобайт в терабайте
	
	echo $tera / 2 **10;
	echo PHP_EOL;
		
?>