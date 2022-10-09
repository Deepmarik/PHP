<?php

//⊗ppPmLpAIN
//урок 57 
 
//Задание 1
$num = 12;
$i = 0;
while ($num < 1000) {
	$num *= 3;
	++$i;
}
echo $i;
echo PHP_EOL;
echo $num;
echo PHP_EOL;

//Задание 2
for ($num = 12, $i = 0; $num  < 1000; $num *= 3, $i++);  
	echo $num . ' ' . $i;

echo PHP_EOL;

?>