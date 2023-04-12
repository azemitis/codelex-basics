<?php

/**
 * See energy-drinks.php
 *
 * A soft drink company recently surveyed 12,467 of its customers and found that
 * approximately 14 percent of those surveyed purchase one or more energy drinks per week.
 * Of those customers who purchase energy drinks, approximately 64 percent of them
 * prefer citrus flavored energy drinks.
 *
 * Write a program that displays the following:
 *
 * The approximate number of customers in the survey who purchased one or more energy drinks per week
 * The approximate number of customers in the survey who prefer citrus flavored energy drinks
 */
class EnergyDrinks
{
    public int $surveyed;
    private float $purchasedEnergyDrinks;
    private float $preferCitrusDrinks;

    public function __construct(int $surveyed, float $purchasedEnergyDrinks, float $preferCitrusDrinks)
    {
        $this->surveyed = $surveyed;
        $this->purchasedEnergyDrinks = $purchasedEnergyDrinks;
        $this->preferCitrusDrinks = $preferCitrusDrinks;
    }

    public function calculateEnergyDrinkers(): int
    {
        return ($this->surveyed * $this->purchasedEnergyDrinks);
    }

    public function calculatePreferCitrus(): int
    {
        return ($this->surveyed * $this->purchasedEnergyDrinks * $this->preferCitrusDrinks);
    }
}

$energyDrinks = new EnergyDrinks(12467, 0.14, 0.64);

echo "Total number of people surveyed: " . $energyDrinks->surveyed . "." . "\n";

echo "Approximately " . $energyDrinks->calculateEnergyDrinkers() .
    " bought at least one energy drink." ."\n";
echo $energyDrinks->calculatePreferCitrus() .
    " of those surveyed prefer citrus flavored energy drinks.";