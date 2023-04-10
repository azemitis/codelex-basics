<?php

/**
 * Create a class Product that represents a product sold in a shop. A product has a price, amount and name.
 *
 * The class should have:
 *
 * A constructor Product  __construct(string name, float startPrice, int amount)
 * A function printProduct() that prints a product in the following form:
 *
 * Banana, price 1.1, amount 13
 *
 * Test your code by creating a class with main method and add three products there:
 *
 * "Logitech mouse", 70.00 EUR, 14 units
 * "iPhone 5s", 999.99 EUR, 3 units
 * "Epson EB-U05", 440.46 EUR, 1 units
 *
 * Print out information about them.
 *
 * Add new behaviour to the Product class:
 *
 * possibility to change quantity
 * possibility to change price
 *
 * Reflect your changes in a working application.
 */


class Product
{
    private $name;
    private $price;
    private $amount;

    public function __construct(string $name, float $startPrice, int $amount)
    {
        $this->name = $name;
        $this->price = $startPrice;
        $this->amount = $amount;
    }
    function printProduct(): string
    {
        return "$this->name, price $this->price, amount $this->amount\n";
    }

    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
}

$product1 = new Product("Logitech mouse", 70.00, 14);
$product2 = new Product("iPhone 5s", 999.99, 3);
$product3 = new Product("Epson EB-U05", 440.46, 1);

echo $product1->printProduct();
echo $product2->printProduct();
echo $product3->printProduct();

$product1->setPrice(90.00);
$product1->setAmount(5);

echo $product1->printProduct();
