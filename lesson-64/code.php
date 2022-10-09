<?php

//⊗ppPmLpAEN
//урок 64

//Задание 1
$arr = [1, 2, 3, 4, 5];
for ($i=0; $i < count($arr)-1; $i++) { 
	echo $arr[$i + 1];
	echo PHP_EOL;
}
//var_dump($arr);
echo PHP_EOL;

//Задание 2

$arr = [1, 2, 3, 4, 5];
for ($i=0; $i < count($arr)-1; $i++) { 
	echo $arr[$i + 1] + $arr[$i];
	echo PHP_EOL;
}
echo PHP_EOL;

//Задание 3
$arr = [1, 2, 3, 4, 5,6,7,8,9];
for ($i=2; $i < count($arr); $i++) { 
	echo $arr[$i - 1] .' '. $arr[$i - 2];
	echo PHP_EOL;
}
echo PHP_EOL;

//Задание 4

$arr = [1, 2, 3, 4, 5,6,7,8,9];
for ($i=2; $i < count($arr); $i++) { 
	echo $arr[$i] + $arr[$i - 1] + $arr[$i - 2];
	echo PHP_EOL;
}
echo PHP_EOL;

//Задание 5
$arr = [1, 2, 3, 4, 5,6,7,8,9];
for ($i=1; $i < count($arr)-1; $i++) { 
	echo $arr[$i] + $arr[$i - 1] + $arr[$i + 1];
	echo PHP_EOL;
}
echo PHP_EOL;