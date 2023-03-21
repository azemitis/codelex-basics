<?php

$person = new stdClass();
$person->name = 'Jānis';
$person->cash = 9999999999;
$person->licences = ['A', 'B', 'F', 'GF'];

function createWeapon(string $name, int $price, string $licence): stdClass
{
    $weapon = new stdClass();
    $weapon->name = $name;
    $weapon->price = $price;
    $weapon->licences = $licence;

    return $weapon;
}

$weapons = [
    'knife' => createWeapon('knife', 500, 'A'),
    'AK47' => createWeapon('AK47 Light', 10000, 'F'),
    'dynamite' => createWeapon('Boom!', 300, 'C'),
    'tank' => createWeapon('Panzer 3000', 10099, 'GF'),
];

$cash = $person->cash / 100;
$licences = implode(', ', $person->licences);

echo "Welcome, $person->name $($cash) [$licences]";
echo PHP_EOL;
echo "-------------------";
echo PHP_EOL;

foreach ($weapons as $key => $weapon)
{
    $price = $weapon->price / 100;
    echo "[$key] $weapon->name | $price | $weapon->licences" . PHP_EOL;
}

$selectedWeapon = null;

while($selectedWeapon == null)
{
    $selection = readline('Please select weapon:');

    if (!array_key_exists($selection, $weapons))
    {
        echo "Weapon not found" . PHP_EOL;
        continue;
    }

    if(!in_array($weapons[$selection]->licences, $person->licences))
    {
        echo "Invalid licence" . PHP_EOL;
        continue;
    }

    if($person->cash < $weapons[$selection]->price)
    {
        echo "Not enough cash!" . PHP_EOL;
        continue;
    }

    $selectedWeapon = $weapons[$selection];
}

$person->cash -= $selectedWeapon->price;

echo PHP_EOL;
echo $person->cash;


//Imagine you own a gun store. Only certain guns can be purchased with license types.
//Create an object (person) that will be the requester to purchase a gun (object) Person object has a name, valid licenses (multiple) & cash. Guns are objects stored within an array.
//Each gun has license letter, price & name.
//Using PHP in-built functions determine if the requester (person) can buy a gun from the store.