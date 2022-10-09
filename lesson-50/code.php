<?php

//⊗ppPmLpFI
//урок 50 
 
//Задание 1
$arr = [1, 2, 3, 4, 5];
	
foreach ($arr as $elem) {
	
	if (($elem % 2) !=0 ) {
		echo $elem;
		echo PHP_EOL;
	}
}

echo PHP_EOL;

//Задание 2

$arr = [2, 5, 9, 15, 1, 4];
foreach ($arr as $elem) {
	if ($elem > 3 && $elem < 10) {
		echo $elem;
		echo PHP_EOL;
	}
}

echo PHP_EOL;

//Задание 3
$sum = 0;
$arr = [2, 5, -9, 15, 1, -4];
foreach ($arr as $elem) {
	if ($elem > 0 ) {
		
		$sum += $elem;
			
	}
	
}
echo $sum;
echo PHP_EOL;

//Задание 4

$arr = [10, 20, 30, 50, 235, 3000];
foreach ($arr as $elem) {
	$item = (string)$elem;
	if ($item[0] == 1 || $item[0] == 2 || $item[0] == 5) {
		echo $item;
		echo PHP_EOL;
	}
}

//Задание 5

$week = [1 => 'пн' ,2 => 'вт' ,3 =>'ср' ,4 =>'чт' ,5 =>'пт' ,6 =>'сб' ,7 =>'вс'];
foreach ($week as $day) 
	 {
	if ($day == 'сб' || $day == 'вс' ) {
		echo '<b>'.$day.'</b>';
		
	}
	else { echo $day;}
	echo PHP_EOL;
}

//вариант 2
foreach ($week as $key => $day) {
	if ($key == 6 || $key == 7) {
		echo '<b>'.$day.'</b>';
	}
	else { echo $day;}
	echo PHP_EOL;
}

//Задание 6

$week = [1 => 'пн' ,2 => 'вт' ,3 =>'ср' ,4 =>'чт' ,5 =>'пт' ,6 =>'сб' ,7 =>'вс'];
$day = 4;
foreach ($week as $key => $item) {
	if ($key == $day) {
		echo '<i>'.$item.'</i>';
	}
	else { echo $item;}
	echo PHP_EOL;
}
?>