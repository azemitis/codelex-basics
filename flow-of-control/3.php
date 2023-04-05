<?php

/**
 * Write a program that reads an positive integer and count the number of digits the number has.
 */

$number = readline("Enter a number: ");

if ($number < 0){
    echo "The number is negative";
}
elseif ($number == 0){
    echo "The number is zero";
}
else{
    $digitCount = strlen($number);
    if ($digitCount === 1) {
        echo "The number is positive and has 1 digit";
    } else {
        echo "The number is positive and has " . $digitCount . " digits";
    }
}
