<?php

//⊗ppPmLpRLA
//урок 47 
 
//Задание 1
$result = 1;
	
for ($i=1; $i <= 20; $i++) { 
	
	$result *= $i;
	} 
echo $result;
echo PHP_EOL;

//Задание 2

$result = 0;
	
for ($i = 2; $i <= 100 ; $i += 2) { 
	$result += $i;
	}
echo $result;
echo PHP_EOL;

//Задание 3

$result = 0;
	
for ($i = 1; $i < 100 ; $i += 2) { 
	$result += $i;
	}
echo $result;
echo PHP_EOL;

?>