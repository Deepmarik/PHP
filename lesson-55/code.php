<?php

//⊗ppPmLpFl
//урок 55 
 
//Задание 1
$arr = ['a', 'b', 'c', 'd', 'e'];
$flag = false;
	
foreach ($arr as  $elem) {
	if ($elem == 'c') {
		$flag = true;
	}
}
if ($flag == true) {
	echo 'есть';
}
else {
	echo 'нет';
}
echo PHP_EOL;



?>