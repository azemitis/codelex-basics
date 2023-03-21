<?php

$fruits = [
    ["name" => "Apple", "weight" => 5],
    ["name" => "Banana", "weight" => 10],
    ["name" => "Orange", "weight" => 20]
];

$costsPerWeight = [
    ["weight" => 5, "shipping" => 1],
    ["weight" => 10, "shipping" => 1],
    ["weight" => 20, "shipping" => 2]
];

function overTen(array $data, array $costs) {
    foreach ($data as $fruit) {
        $shippingCost = 1;

        if($fruit['weight'] > 10) {
            foreach ($costs as $cost) {
                if($fruit['weight'] == $cost["weight"]) {
                    $shippingCost = $cost["shipping"];
                    break;
                }
            }
        }
        echo "{$fruit['name']}. Price: {$fruit['weight']} kg. Cost of shipping: $shippingCost euros.\n";
    }
}

overTen($fruits, $costsPerWeight);

//Create a 2D associative array in 2nd dimension with fruits and their weight.
//Create a function that determines if fruit has weight over 10kg.
//Create a secondary array with shipping costs per weight.
//Meaning that you can say that over 10 kg shipping costs are 2 euros, otherwise its 1 euro.
//Using foreach loop print out the values of the fruits and how much it would cost to ship this product.