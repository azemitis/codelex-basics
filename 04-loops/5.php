<?php

$persons = [
    (object)[
            "name" => "John",
            "surname" => "Doe",
            "age" => 50,
            "birthday" => '1973.01.01'
        ],
    (object)[
            "name" => "Davis",
            "surname" => "Flintch",
            "age" => 10,
            "birthday" => '2013.02.02'
        ]
];

foreach ($persons as $person) {
    echo "Name: " . $person->name . "\n";
    echo "Surname: " . $person->surname . "\n";
    echo "Age: " . $person->age . "\n";
    echo "Birthday: " . $person->birthday . "\n";
    echo "\n";
}

//Create an associative array with objects of multiple persons.
//Each person should have a name, surname, age and birthday.
//Using loop (by your choice) print out every persons personal data.