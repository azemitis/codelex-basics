<?php

/**  Rock-paper-scissors game in PHP */

$choices = ['rock', 'paper', 'scissors'];
$computerChoice = $choices[rand(0, 2)];

$userInput = readline('Select rock, paper, or scissors: ');

while (!in_array($userInput, $choices)) {
    echo "Invalid input. Select rock, paper, or scissors: ";
    $userInput = readline();
}

if ($userInput == $computerChoice) {
    echo "It's a tie!";
} elseif (($userInput == 'rock' && $computerChoice == 'scissors') ||
    ($userInput == 'paper' && $computerChoice == 'rock') ||
    ($userInput == 'scissors' && $computerChoice == 'paper')) {
    echo "You win! Computer chose $computerChoice";
} else {
    echo "Computer wins! Computer chose $computerChoice";
}