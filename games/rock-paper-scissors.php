<?php

/**  Rock-paper-scissors game in PHP */

$choices = ['rock', 'paper', 'scissors', 'lizard', 'spock'];
$computerWins = 0;
$userWins = 0;

for ($i = 1; $i <= 5; $i++) {
    $computerChoice = $choices[rand(0, 4)];
    $userInput = readline("Game $i: Select rock, paper, scissors, lizard, or spock: ");

    while (!in_array($userInput, $choices))
    {
        echo "Invalid input. Select rock, paper, scissors, lizard, or spock: ";
        $userInput = readline();
    }

    if ($userInput == $computerChoice)
    {
        echo "It's a draw!\n";
    } elseif (
        ($userInput == 'rock' && ($computerChoice == 'scissors' || $computerChoice == 'lizard')) ||
        ($userInput == 'paper' && ($computerChoice == 'rock' || $computerChoice == 'spock')) ||
        ($userInput == 'scissors' && ($computerChoice == 'paper' || $computerChoice == 'lizard')) ||
        ($userInput == 'lizard' && ($computerChoice == 'paper' || $computerChoice == 'spock')) ||
        ($userInput == 'spock' && ($computerChoice == 'rock' || $computerChoice == 'scissors'))
    ) {
        echo "You win! Computer chose $computerChoice\n";
        $userWins++;
    } else {
        echo "Computer wins! Computer chose $computerChoice\n";
        $computerWins++;
    }
}

if ($computerWins > $userWins) {
    echo "Computer wins with $computerWins out of 5 games.\n";
} elseif ($userWins > $computerWins) {
    echo "You won with $userWins out of 5 games.\n";
} else {
    echo "It's a draw! You and computer both won $userWins games out of 5.\n";
}