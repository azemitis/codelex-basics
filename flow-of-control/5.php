<?php

/**
 * On your phone keypad, the alphabets are mapped to digits as follows:
 * ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).
 *
 * Write a program called PhoneKeyPad, which prompts user for a String (case insensitive),
 * and converts to a sequence of keypad digits.
 *
 * Use:
 *
 * a "nested-if" statement
 * a "switch-case-default" statement
 *
 * Hint: In switch-case, you can handle multiple cases by omitting the break statement, e.g.,
 */

$string = strtolower(readline("Input a string: "));
$ifOutput = "";
$switchOutput = "";

// "nested-if" statement

for ($i = 0; $i < strlen($string); $i++) {
    $letter = $string[$i];
    if ($letter == "a" || $letter == "b" || $letter == "c") {
        $ifOutput .= "2";
    } elseif ($letter == "d" || $letter == "e" || $letter == "f") {
        $ifOutput .= "3";
    } elseif ($letter == "g" || $letter == "h" || $letter == "i") {
        $ifOutput .= "4";
    } elseif ($letter == "j" || $letter == "k" || $letter == "l") {
        $ifOutput .= "5";
    } elseif ($letter == "m" || $letter == "n" || $letter == "o") {
        $ifOutput .= "6";
    } elseif ($letter == "p" || $letter == "q" || $letter == "r" || $letter == "s") {
        $ifOutput .= "7";
    } elseif ($letter == "t" || $letter == "u" || $letter == "v") {
        $ifOutput .= "8";
    } elseif ($letter == "w" || $letter == "x" || $letter == "y" || $letter == "z") {
        $ifOutput .= "9";
    } else {
        $ifOutput .= " ";
    }
}

echo $ifOutput . PHP_EOL;

//"switch-case-default" statement.

for ($i = 0; $i < strlen($string); $i++) {
    $letter = $string[$i];

    switch ($letter) {
        case "a":
        case "b":
        case "c":
            $switchOutput .= "2";
            break;
        case "d":
        case "e":
        case "f":
            $switchOutput .= "3";
            break;
        case "g":
        case "h":
        case "i":
            $switchOutput .= "4";
            break;
        case "j":
        case "k":
        case "l":
            $switchOutput .= "5";
            break;
        case "m":
        case "n":
        case "o":
            $switchOutput .= "6";
            break;
        case "p":
        case "q":
        case "r":
        case "s":
            $switchOutput .= "7";
            break;
        case "t":
        case "u":
        case "v":
            $switchOutput .= "8";
            break;
        case "w":
        case "x":
        case "y":
        case "z":
            $switchOutput .= "9";
            break;
        default:
            $switchOutput .= " ";
            break;
    }
}

echo $switchOutput . PHP_EOL;