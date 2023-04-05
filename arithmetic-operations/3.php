<?php

/**
 * Write a program to produce the sum of 1, 2, 3, ..., to 100.
 * Store 1 and 100 in variables lower bound and upper bound, so that we can change their values easily.
 * Also compute and display the average. The output shall look like:
 * The sum of 1 to 100 is 5050
 * The average is 50.5
 */

$lowerBound = 1;
$upperBound = 100;

$array = [];
$sum = 0;

for ($i = $lowerBound; $i <= $upperBound; $i++) {
    $array[] = $i;
    $sum += $i;
}

$average = $sum / count($array);

echo "The sum of $lowerBound to $upperBound is $sum\n";
echo "The average is $average";