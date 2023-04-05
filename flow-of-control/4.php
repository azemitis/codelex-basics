<?php

/**
 * Write a program which prints “Sunday”, “Monday”, ...
 * “Saturday” if the int variable "dayNumber" is 0, 1, ..., 6, respectively.
 * Otherwise, it shall print "Not a valid day".
 *
 * Use:
 *
 * a "nested-if" statement
 * a "switch-case-default" statement.
 */

$number = readline("Enter a day number: ");

// "nested-if" statement
if ($number == 0) {
    echo "Sunday";
} elseif ($number == 1) {
    echo "Monday";
} elseif ($number == 2) {
    echo "Tuesday";
} elseif ($number == 3) {
    echo "Wednesday";
} elseif ($number == 4) {
    echo "Thursday";
} elseif ($number == 5) {
    echo "Friday";
} elseif ($number == 6) {
    echo "Saturday";
} else {
    echo "Not a valid day";
}

echo PHP_EOL;

//"switch-case-default" statement.
switch ($number) {
    case 0:
        echo "Sunday";
        break;
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    default:
        echo "Not a valid day";
        break;
}