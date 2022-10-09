<?php

//⊗ppPmLpBr
//урок 53 
 
//Задание 1
$arr = [1, 2, 3, 0, 5];
	
foreach ($arr as $elem) {
	
	if ($elem != 0) {
		echo $elem;
		echo PHP_EOL;
	}
	else {break;}
}
echo PHP_EOL;

//Задание 2
$sum = 0;
$arr = [2, 5, 9, -15, 1, 4];
foreach ($arr as $elem) {
	if ($elem > 0) {
		$sum += $elem;
	}
	else {break;}
}
echo $sum;
echo PHP_EOL;

//Задание 3

$arr = [2, 5, -9, 15, 3, -4];
foreach ($arr as $key => $elem) {
	if ($elem == 3) {
		echo $key;
		break;
		}
	}
echo PHP_EOL;


//Задание 4

$i=1;
$sum=0;
while ($sum <= 100) {
	$sum += $i;
	$i++;
	
	if ($sum > 100) {
		echo $i;
		echo PHP_EOL;
		echo $sum;
		echo PHP_EOL;
		break;
	}
}

?>