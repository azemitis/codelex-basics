<?php

/**
 *
 * Write a program to accept two integers and return true
 * if the either one is 15 or if their sum or difference is 15.
 */

$integerOne = readline("Enter integer 1: ");
$integerTwo = readline("Enter integer 2: ");

if ($integerOne == 15 || $integerTwo == 15 || $integerOne + $integerTwo == 15 ||
    abs($integerOne - $integerTwo) == 15) {
    echo "true";
} else {
    echo "false";
}