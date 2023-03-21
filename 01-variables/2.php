
<?php

$integer = 10;

$float = 10.10;

$string = 'hello world';

$fullFloat =  sprintf('%0.2f', $float);
$variable = $integer . ' ' . $fullFloat . ' ' . $string;

var_dump($variable);



//Dump the same values that should display both data type & its value. (Note, usage of var_dump)