<?php

/**
Create a .csv file that stores (ID, name, surname, age) of multiple persons.
Create a program that accepts 1 argument (id of the user) and displays the user information
 * if the user has been found.
If the user has not been found, output that in the console.
 */

if (empty($argv[1])) {
    echo "Please specify a user ID.\n";
    exit;
}

$search_id = (int) $argv[1];
$file = fopen('persons.csv', 'r');
$headers = fgetcsv($file);

while (($row = fgetcsv($file)) !== false) {
    if ($row[0] == $search_id) {
        echo "ID: $row[0]\n";
        echo "Name: $row[1]\n";
        echo "Surname: $row[2]\n";
        echo "Age: $row[3]\n";
        exit(0);
    }
}

echo "User with ID $search_id not found.\n";

fclose($file);
