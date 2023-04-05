<?php

/**
 * Modify the example program to compute the position of an object after falling for 10 seconds,
 * outputting the position in meters. The formula in Math notation is:
 *
 * Gravity formula
 *
 * Note: The correct value is -490.5m.
 */

$gravity = -9.81;
$time = 10;
$vi = 0;
$xi = 0;

$position = 0.5 * $gravity * pow($time, 2) + $vi * $time + $xi;

echo "The position after falling for 10 seconds is: " . $position . "m.";

