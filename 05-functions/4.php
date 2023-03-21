<?php

$person = [
    (object)[
        "name" => "John",
        "surname" => "Doe",
        "age" => 50,
    ],
    (object)[
        "name" => "Davis",
        "surname" => "Flintch",
        "age" => 10,
        "birthday" => '2013.02.02'
    ]
];
function isEighteen($object) {
    foreach ($object as $person) {
        if($person->age >= 18) {
            echo "$person->name $person->surname has reached 18 years of age \n";
        } else {
            echo "$person->name $person->surname has not reached 18 years of age \n";
        }
    }
}

isEighteen($person);

//Create a array of objects that uses the function of
//exercise 3 but in loop printing out if the person has reached age of 18.