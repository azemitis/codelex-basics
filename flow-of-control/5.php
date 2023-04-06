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
$digits = "";
$switchOutput = "";

// "nested-if" statement

$keypad = [' ' => "", 'abc' => 2, 'def' => 3, 'ghi' => 4, 'jkl' => 5,
    'mno' => 6, 'pqrs' => 7, 'tuv' => 8, 'wxyz' => 9];

for ($i = 0; $i < strlen($string); $i++) {
    $letter = $string[$i];
    foreach ($keypad as $key => $value) {
        $letterPosition = strpos($key, $letter);
        if ($letterPosition !== false) {
            $digits .= str_repeat((string)$value, 1 + $letterPosition);
        }
    }
}

echo $digits . PHP_EOL;

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