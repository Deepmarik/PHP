<?php

//⊗ppPmLpSAAF
//урок 67

//Задание 1
$str = '';

for ($i= 0; $i < 5; $i++) { 
	$str = $str . 'xx';
	//$str .= $str;
	echo $str;
	echo PHP_EOL;
}


//Задание 2

for ($i = 1; $i < 10; $i+=2) { 
	for ($j=0; $j < $i; $j++) { 
		echo $i;
	}
	echo PHP_EOL;
}
echo PHP_EOL;

//Задание 3
$str = '';
for ($i=5; $i > 0; $i--) { 
	for ($j=0; $j < $i; $j++) { 
		echo $str . 'xx';
	}
	echo PHP_EOL;
}

//Задание 3

for ($i=9; $i > 0 ; $i--) { 
	for ($j=0; $j < $i; $j++) { 
		echo $i;
	}
	echo PHP_EOL;
}
?>