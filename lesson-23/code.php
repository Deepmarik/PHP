<?php
	//⊗ppPmArAs
	//урок 23 
	 
	//Задание 1

	$arr = [1=> 'a' , 'b' , 'c'] ;
	var_dump ($arr);
	echo $arr[1]; 
	echo $arr[2]; 
	echo $arr[3];
	echo PHP_EOL;

	//Задание 2

	$arr = [1 => 'ян', 'фв', 'мр', 'ап', 'м', 'ин', 'ил' , 'ав', 'ст', 'ок', 'нр', 'дк'];
	echo PHP_EOL;

	//Задание 3
	
	$arr = ['name' => 'Гарри', 'surname' => 'Поттер', 'patronymic' => 'Джеймсович'];
	echo $arr['name'] . ' ' . $arr['patronymic'] . ' ' . $arr['surname'] ;
	echo PHP_EOL;

	//Задание 4
	
	$date = ['year' => '2022', 'month' => 'август', 'day' => 'пятница'];
	echo $date['year'] . '-' . $date['month'] . '-' . $date['day'] ;
	echo PHP_EOL;

?>