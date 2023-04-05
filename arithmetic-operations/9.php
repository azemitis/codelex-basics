<?php

/**
 * Write a program that calculates and displays a person's body mass index (BMI).
 *
 * A person's BMI is calculated with the following formula: BMI = weight x 703 / height ^ 2.
 * Where weight is measured in pounds and height is measured in inches.
 * Display a message indicating whether the person has optimal weight, is underweight, or is overweight.
 * A sedentary person's weight is considered optimal if his or her BMI is between 18.5 and 25.
 * If the BMI is less than 18.5, the person is considered underweight.
 * If the BMI value is greater than 25, the person is considered overweight.
 *
 * Your program must accept metric units.
 */

function bodyMassIndex(int $weight, float $height): string
{
    $bmi = $weight / ($height ** 2);

    if ($bmi < 18.5) {
        return "Underweight";
    } elseif ($bmi >= 18.5 && $bmi <= 25) {
        return "Optimal weight";
    } else {
        return "Overweight";
    }
}

echo "Person 1: " . bodyMassIndex(60, 2) . "\n";
echo "Person 2: " . bodyMassIndex(80, 1.8) . "\n";
echo "Person 3: " . bodyMassIndex(90, 1.6) . "\n";
