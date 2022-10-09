<?php

//⊗ppPmLpPrNm
//урок 56 
 
//Задание 1
$num = 12;
$flag = true;
for ($i = 2; $i < $num; $i++) { 
	if ($num % $i == 0) {
		$flag = false;
	break;
	}
}
var_dump($flag) ;

?>