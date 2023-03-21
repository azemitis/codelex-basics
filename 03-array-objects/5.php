<?php

$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];

$values = [];

foreach ($items[0] as $item) {
    $values[] = $item["name"] . ' ' . $item["surname"] . ' ' . $item["age"];
}

//print_r($values);

echo implode(" & ", $values);
//Program should display concatenated value of - John & Jane Doe`s