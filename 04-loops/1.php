<?php

$integers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($integers as $key => $integer) {
    echo $integer;
    if ($key < count($integers) - 1) {
        echo ', ';
    }
}

//Create an array with integers (up to 10) and print them out using foreach loop.