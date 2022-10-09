<?php

//⊗ppPmCdNC
//урок 42 
 
//Задание 1

$user = $user['name'] ?? 'empty';
echo PHP_EOL;

//Задание 2

$result = $user['name'] ?? $user['surname'] ?? 'empty' ;
?>