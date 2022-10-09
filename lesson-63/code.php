<?php

//⊗ppPmLpLAT
//урок 63

//Задание 1
$arr = [
	'employee1' => 100,
	'employee2' => 200,
	'employee3' => 300,
	'employee4' => 400,
	'employee5' => 500,
	'employee6' => 600,
	'employee7' => 700,
];
foreach ($arr as $key => $elem) {
	$arr[$key] = $arr[$key] + $arr[$key] * 0.1;
}
var_dump($arr);
echo PHP_EOL;

//Задание 2

$arr = [
	'employee1' => 100,
	'employee2' => 200,
	'employee3' => 300,
	'employee4' => 400,
	'employee5' => 500,
	'employee6' => 600,
	'employee7' => 700,
];
foreach ($arr as $key => $elem) {
	if ($arr[$key] < 400) {
		$arr[$key] = $arr[$key] + $arr[$key] * 0.1;
	}
}
var_dump($arr);
echo PHP_EOL;

//Задание 3
$sumElem = 0;
$sumKey = 0;
$arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
foreach ($arr as $key => $elem) {
	$sumElem += $arr[$key];
	$sumKey += $key;
}

echo $sumKey / $sumElem;
echo PHP_EOL;

//Задание 4

$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$arrKey = [];
$arrElem = [];
foreach ($arr as $key => $elem) {
	$arrElem[] = $arr[$key];
	$arrKey[] = $key;
}
echo PHP_EOL;
var_dump($arrElem);
echo PHP_EOL;
var_dump($arrKey);

//Задание 5
$arrNew = [];
$arr = [
	1 => 125,
	2 => 225,
	3 => 128,
	4 => 356,
	5 => 145,
	6 => 281,
	7 => 452,
];
foreach ($arr as $key => $elem) {
	if ($arr[$key] < 300) {
		$arrNew[] = $arr[$key];
	}
}
echo PHP_EOL;
var_dump($arrNew);