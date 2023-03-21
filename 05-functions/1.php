<?php

function addCodelex($string) {
    return $string . 'codelex';
}

$anyString = 'text';

echo addCodelex($anyString);

//Create a function that accepts any string and returns the same value with added "codelex" by the end of it.
//Print this value out.