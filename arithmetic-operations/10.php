<?php

/**
 * See calculate-area.php
 *
 * Design a Geometry class with the following methods:
 *
 * A static method that accepts the radius of a circle and returns the area of the circle.
 * Use the following formula:
 * Area = π * r * 2
 * Use Math.PI for π and r for the radius of the circle
 * A static method that accepts the length and width of a rectangle and returns the area of the rectangle.
 * Use the following formula:
 * Area = Length x Width
 * A static method that accepts the length of a triangle’s base and the triangle’s height.
 * the method should return the area of the triangle. Use the following formula:
 * Area = Base x Height x 0.5
 *
 * The methods should display an error message if negative values are used for the circle’s radius,
 * the rectangle’s length or width, or the triangle’s base or height.
 *
 * Next write a program to test the class, which displays the following menu and responds to the user’s selection:
 *
 * Geometry calculator:
 *
 * Calculate the Area of a Circle
 * Calculate the Area of a Rectangle
 * Calculate the Area of a Triangle
 * Quit
 * Enter your choice (1-4):
 *
 * Display an error message if the user enters a number outside the range of 1 through 4
 * when selecting an item from the menu.
 */
function circleArea(float $radius): float {
    if ($radius < 0) {
        echo "Radius cannot be negative";
    }
    return M_PI * $radius ** 2;
}

function rectangleArea(float $length, float $width): float {
    if ($length < 0 || $width < 0) {
        echo "Length and width cannot be negative";
    }
    return $length * $width;
}

function triangleArea(float $base, float $height): float {
    if ($base < 0 || $height < 0) {
        echo "Base and height cannot be negative";
    }
    return $base * $height * 0.5;
}

echo "Geometry calculator:\n";
echo "1. Calculate the Area of a Circle\n";
echo "2. Calculate the Area of a Rectangle\n";
echo "3. Calculate the Area of a Triangle\n";
echo "4. Quit\n";
$userInput = readline("Enter your choice (1-4): ");

if ($userInput == 1) {
    $radius = readline("Enter the radius of the circle: ");
    echo "The area of the circle is " . circleArea($radius) . "\n";
} elseif ($userInput == 2) {
    $length = readline("Enter the length of the rectangle: ");
    $width = readline("Enter the width of the rectangle: ");
    echo "The area of the rectangle is " . rectangleArea($length, $width) . "\n";
} elseif ($userInput == 3) {
    $base = readline("Enter the base of the triangle: ");
    $height = readline("Enter the height of the triangle: ");
    echo "The area of the triangle is " . triangleArea($base, $height) . "\n";
} elseif ($userInput == 4) {
    echo "Goodbye!\n";
} else {
    echo "Invalid choice. Please enter a number between 1 and 4.\n";
}