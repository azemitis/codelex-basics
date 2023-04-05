<?php

/**
 * Write a program called CheckOddEven which prints "Odd Number"
 * if the int variable “number” is odd, or “Even Number” otherwise.
 * The program shall always print “bye!” before exiting.
 */

$userInput = readline("Enter an integer: ");

if ($userInput % 2 != 0) {
    echo "Odd Number\n";
} else {
    echo "Even Number\n";
}

echo "bye!";

