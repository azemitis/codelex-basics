<?php
/**
 * Game Vending Machine.
 * We have products.
 * Product - title, price
 * Option to select product. Put in predefined value coins.
 * Subtract price from total money. Give back balance money in coins.
 */

$products = [
    ['title' => 'Coffee L', 'price' => 190],
    ['title' => 'Coffee XL', 'price' => 280],
    ['title' => 'Hot Chocolate', 'price' => 175],
    ['title' => 'Tea', 'price' => 145],
];

$coins = [
    200, 100, 50, 20, 10, 5, 2, 1
];

$wallet = 0;

// Selecting product

$userInput = readline("Please select your product: ");

$userInput = strtolower($userInput);

$selectedProduct = "";

$lowercaseTitles = array_map('strtolower', array_column($products, 'title'));

while (!in_array($userInput, $lowercaseTitles)) {
    echo "Invalid product. Please select your product: ";
    $userInput = readline();
    $userInput = strtolower($userInput);
}

foreach ($products as $product) {
    if (strtolower($product['title']) === $userInput) {
        $selectedProduct = $product;
        break;
    }
}

echo "Selected product: {$selectedProduct['title']}, price: {$selectedProduct['price']}\n";

// Coin validation

$insertedCoins = readline("Insert Coin. Use ' ' seperator: ");

$coinsInput = explode(" ", $insertedCoins);

$acceptedCoins = [];

foreach ($coinsInput as $coin) {
    if (in_array($coin, $coins)) {
        $acceptedCoins[] = $coin;
    } else {
        echo "Invalid coin: $coin\n";
    }
}

//Balance calculation

$wallet = array_sum($acceptedCoins);

$balance = $wallet - $selectedProduct['price'];

if ($balance < 0) {
    while ($balance < 0) {
        echo "Please insert more coins.\n";
        echo "Amount needed: " . abs($balance) . "\n";
        $insertedCoins = readline("Insert Coin: ");
        $coinsInput = explode(" ", $insertedCoins);
        $acceptedCoins = [];
        foreach ($coinsInput as $coin) {
            if (in_array($coin, $coins)) {
                $acceptedCoins[] = $coin;
            } else {
                echo "Invalid coin: $coin\n";
            }
        }
        $wallet += array_sum($acceptedCoins);
        $balance = $wallet - $selectedProduct['price'];
    }
}

// How many times coins fit inside balance;
$coinsToReturn = [];
foreach ($coins as $coin) {
    $times = floor($balance / $coin);
    $balance -= $coin * $times;
    if ($times > 0) {
        $coinsToReturn[$coin] = $times;
    }
}

echo "Please take your " . strtolower($selectedProduct['title']) . "!" . "\n";
echo "Coins returned: ";
foreach ($coinsToReturn as $coin => $times) {
    echo "$coin ";
}

echo "\n";

echo "Thank you, come again!\n";
