<?php

//⊗ppPmLpSF
//урок 58 
 
//Задание 1
$str = '';
for ($i=0; $i < 5; $i++) { 
	$str .= '0';
}
echo $str;
echo PHP_EOL;

//Задание 2

$str = '';
for ($i = 1; $i  <= 9; $i++)  
	{$str .= $i;}
echo $str;
echo PHP_EOL;

//Задание 3

$str = '';
for ($i = 9; $i >= 1; $i--)  
	{$str .= $i;}
echo $str;
echo PHP_EOL;

//Задание 4

$str = '';
for ($i = 1; $i  <= 9; $i++)  
	{$str .= '-'.$i;
	if ($i == 9) {
		$str .= '-';
	}}
echo $str;
echo PHP_EOL;

?>