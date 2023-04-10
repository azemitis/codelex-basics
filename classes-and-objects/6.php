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
    private float $purchased_energy_drinks;
    private float $prefer_citrus_drinks;

    public function __construct(int $surveyed, float $purchased_energy_drinks, float $prefer_citrus_drinks)
    {
        $this->surveyed = $surveyed;
        $this->purchased_energy_drinks = $purchased_energy_drinks;
        $this->prefer_citrus_drinks = $prefer_citrus_drinks;
    }

    public function calculate_energy_drinkers(): int
    {
        return ($this->surveyed * $this->purchased_energy_drinks);
    }

    public function calculate_prefer_citrus(): int
    {
        return ($this->surveyed * $this->purchased_energy_drinks * $this->prefer_citrus_drinks);
    }
}

$energyDrinks = new EnergyDrinks(12467, 0.14, 0.64);

echo "Total number of people surveyed: " . $energyDrinks->surveyed . "." . "\n";

echo "Approximately " . $energyDrinks->calculate_energy_drinkers() .
    " bought at least one energy drink." ."\n";
echo $energyDrinks->calculate_prefer_citrus($energyDrinks->surveyed) .
    " of those surveyed prefer citrus flavored energy drinks.";