<?php

/**  Rock-paper-scissors game in PHP */

$choices = ['rock', 'paper', 'scissors', 'lizard', 'spock'];
$computerChoice = $choices[rand(0, 4)];

$userInput = readline('Select rock, paper, scissors, lizard, or spock: ');

while (!in_array($userInput, $choices))
{
    echo "Invalid input. Select rock, paper, scissors, lizard, or spock: ";
    $userInput = readline();
}

if ($userInput == $computerChoice)
{
    echo "It's a draw!";
} elseif (
    ($userInput == 'rock' && ($computerChoice == 'scissors' || $computerChoice == 'lizard')) ||
    ($userInput == 'paper' && ($computerChoice == 'rock' || $computerChoice == 'spock')) ||
    ($userInput == 'scissors' && ($computerChoice == 'paper' || $computerChoice == 'lizard')) ||
    ($userInput == 'lizard' && ($computerChoice == 'paper' || $computerChoice == 'spock')) ||
    ($userInput == 'spock' && ($computerChoice == 'rock' || $computerChoice == 'scissors'))
) {
    echo "You win! Computer chose $computerChoice";
} else {
    echo "Computer wins! Computer chose $computerChoice";
}