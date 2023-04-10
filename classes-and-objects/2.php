<?php

/**
 * Write a method named swapPoints that accepts two Points as parameters and swaps their x/y values.
 *
 * Consider the following example code that calls swapPoints:
 *
 * $p1 = new Point(5, 2);
 * $p2 = new Point(-3, 6);
 * $p1->swapPoints($p1, $p2);
 *
 * echo "(" . $p1->x . ", " . $p1->y . ")";
 * echo "(" . $p2->x . ", " . $p2->y . ")";
 *
 * The output produced from the above code should be:
 *
 * (-3, 6)
 * (5, 2)
 */


class Point
{
    public $x;
    public $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function swapPoints(Point $otherPoint): void
    {
        $tempX = $this->x;
        $tempY = $this->y;
        $this->x = $otherPoint->x;
        $this->y = $otherPoint->y;
        $otherPoint->x = $tempX;
        $otherPoint->y = $tempY;
    }
}

$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);
$p1->swapPoints($p2);

echo "(" . $p1->x . ", " . $p1->y . ")\n";
echo "(" . $p2->x . ", " . $p2->y . ")\n";