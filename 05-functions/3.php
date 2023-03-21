<?php

$person = [
    (object)[
        "name" => "John",
        "surname" => "Doe",
        "age" => 50,
    ]
];
function isEighteen($object) {
    if($object->age > 18) {
        return "the person has reached 18 years of age";
    } else {
        return "The person has not reached 18 years of age";
    }
}

echo isEighteen($person[0]);

//Create a person object with name, surname and age. Create a function that will determine
//if the person has reached 18 years of age.
//Print out if the person has reached age of 18 or not.