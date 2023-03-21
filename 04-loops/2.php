<?php

$integers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

for ($i=0; $i<count($integers); $i++) {
    echo $integers[$i];
    if ($i < count($integers) - 1) {
        echo ', ';
    }
}

//Create an array with integers (up to 10) and print them out using for loop.