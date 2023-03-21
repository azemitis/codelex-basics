<?php

/**
Using PHP in-built functions create a program that accepts 1 argument - filename.
Create a file with the filename of your choice and store information with comma separated (example. John, Doe, 10)
Using PHP in-built functions read information from this file and create an object based on
 information from the file.
Output the name, surname and age of the person in the output.
 */
$file = file_get_contents('filename.txt');
$element = explode(', ', $file);

$obj = new stdClass();
$obj->name = $element[0];
$obj->surname = $element[1];
$obj->age = $element[2];

echo "Name: " . $obj->name . "\n";
echo "Surname: " . $obj->surname . "\n";
echo "Age: " . $obj->age . "\n";
