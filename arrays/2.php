<?php

$numbers = [20, 30, 25, 35, -16, 60, -100];

$averageValue = array_sum($numbers)/ count($numbers);
$roundedValue = round($averageValue);

echo "Average value of numbers is: " . $roundedValue;

//todo calculate an average value of the numbers