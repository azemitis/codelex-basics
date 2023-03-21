<?php

$integer = 10;

$float = 10.10;

$string = 'hello world';

$fullFloat =  sprintf('%0.2f', $float);
$variable = $integer . ' ' . $fullFloat . ' ' . $string;

echo $variable;

//Create variable that prints out an integer 10, float 10.10, string "hello world"