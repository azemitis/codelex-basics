<?php

/**
Write a program that creates an array of ten integers. It should put ten random numbers from 1 to 100 in the array.
It should copy all the elements of that array into another array of the same size.

Then display the contents of both arrays. To get the output to look like this, you'll need a several for loops.

    Create an array of ten integers
    Fill the array with ten random numbers (1-100)
    Copy the array into another array of the same capacity
    Change the last value in the first array to a -7
    Display the contents of both arrays

Array 1: 45 87 39 32 93 86 12 44 75 -7
Array 2: 45 87 39 32 93 86 12 44 75 50

//todo check if an array contains a value user entered.
 * */

$arrayOne = [];
for ($i = 0; $i < 10; $i++) {
    $arrayOne[$i] = rand(1, 100);
}

$arrayTwo = $arrayOne;

$lastValue = readline("Enter a value(-7) to replace the last element of the array: ");

for ($i = 0; $i < count($arrayTwo); $i++) {
    if ($i == count($arrayTwo) - 1) {
        $arrayTwo[$i] = $lastValue;
    }
}

echo "Array 1: " . implode(', ', $arrayOne) . PHP_EOL;
echo "Array 2: " . implode(', ', $arrayTwo) . PHP_EOL;

if (in_array($lastValue, $arrayTwo)) {
    echo "$lastValue is present in the last array." . PHP_EOL;
} else {
    echo "$lastValue is not present in the last array." . PHP_EOL;
}