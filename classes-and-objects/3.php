<?php

/**
 * For this exercise, you will design a set of classes that work together to simulate a car's fuel gauge and odometer. The classes you will design are the following:
 *
 * The FuelGauge Class: This class will simulate a fuel gauge. Its responsibilities are as follows:
 *
 * To know the car’s current amount of fuel, in liters.
 * To report the car’s current amount of fuel, in liters.
 * To be able to increment the amount of fuel by 1 liter. This simulates putting fuel in the car.
 * ( The car can hold a maximum of 70 liters.)
 * To be able to decrement the amount of fuel by 1 liter, if the amount of fuel is greater than 0 liters.
 * This simulates burning fuel as the car runs.
 *
 * The Odometer Class: This class will simulate the car’s odometer. Its responsibilities are as follows:
 *
 * To know the car’s current mileage.
 * To report the car’s current mileage.
 * To be able to increment the current mileage by 1 kilometer.
 * The maximum mileage the odometer can store is 999,999 kilometer. When this amount is exceeded,
 * the odometer resets the current mileage to 0.
 * To be able to work with a FuelGauge object.
 * It should decrease the FuelGauge object’s current amount of fuel by 1 liter for every 10 kilometers traveled.
 * (The car’s fuel economy is 10 kilometers per liter.)
 *
 * Demonstrate the classes by creating instances of each. Simulate filling the car up with fuel,
 * and then run a loop that increments the odometer until the car runs out of fuel. During each loop iteration,
 * print the car’s current mileage and amount of fuel.
 */


class FuelGauge
{
    private int $fuel;

    public function __construct(int $fuel)
    {
        $this->fuel = $fuel;
    }

    public function getFuel(): int
    {
        return $this->fuel;
    }

    public function addFuel(int $add): void
    {
        if ($this->fuel < 70)
        {
            $this->fuel += $add;
        }
    }

    public function consumeFuel(int $amount):void
    {
        if ($this->fuel >= $amount)
        {
            $this->fuel -= $amount;
        }
    }
}

class Odometer
{
    private $mileage;
    private $fuelGauge;

    public function __construct(int $mileage, FuelGauge $fuelGauge)
    {
        $this->mileage = $mileage;
        $this->fuelGauge = $fuelGauge;
    }

    public function getMileage(): int
    {
        return $this->mileage;
    }

    public function addMileage(): void
    {
        $this->mileage++;

        if ($this->mileage > 999999)
        {
            $this->mileage = 0;
        }

        if ($this->mileage % 10 == 0)
        {
            $this->fuelGauge->consumeFuel(1);
        }
    }

    public function drive(int $distance): void
    {
        for ($i = 0; $i < $distance; $i++)
        {
            $this->addMileage();
        }
    }
}

$fuelGauge = new FuelGauge(0);
$odometer = new Odometer(0, $fuelGauge);

$fuelGauge->addFuel(10);
echo "Fuel: " . $fuelGauge->getFuel() . "\n";

while ($fuelGauge->getFuel() >= 1)
{    $odometer->drive(10);
    echo "Mileage: " . $odometer->getMileage() . ", Fuel: " . $fuelGauge->getFuel() . "\n";
}