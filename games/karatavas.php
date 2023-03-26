<?php

/**  Spēle - Karātavas

Uz ekrāna tiek izvadīts spēles laukums, kas sastāda "_" (apkašsvītras) no burtu daudzuma, vārdam, kas jāuzmina.
Vārdi ir iepriekš noteikti masīvā (teiksim 5 vārdi) no kuriem spēles palaišanas brīdī tiek izvēlēts
 * 1 nejaušā secībā.
!!! Svarīgi - Ja tiek atminēts 1 burts, bet vārdā ir vairāki šie burti, VISI tiek atrādīti kā uzminēti.
 * Tā tad - Ja vārdā ir 2 a - minot burtu a, atzīmējas VISI.
Noteikums, ka nepareizu minējumu maksimālais skaits ir 3 reizes. */


$choices = ['rock', 'paper', 'scissors', 'lizard', 'spock'];
$computerChoice = $choices[rand(0, 4)];

$hiddenWord = str_repeat('_', strlen($computerChoice));

echo "The word is $hiddenWord\n";

$mistakes = 0;

while ($hiddenWord !== $computerChoice && $mistakes < 3) {
    $userInput = readline('Enter a letter: ');

    while (!ctype_alpha($userInput) || (strlen($userInput) >1)) {
        echo "The word is $hiddenWord\n";
        echo "Invalid input. Enter a letter: ";
        $userInput = readline();
    };

    if (strpos($computerChoice, $userInput) !== false) {
        $foundIndex = strpos($hiddenWord, '_');
        while ($foundIndex !== false) {
            if ($computerChoice[$foundIndex] === $userInput) {
                $hiddenWord[$foundIndex] = $userInput;
            }
            $foundIndex = strpos($hiddenWord, '_', $foundIndex + 1);
        }
        echo "The letter '$userInput' is in the word! \n";
        echo "The word is $hiddenWord\n";
    } else {
        echo "Sorry, the letter '$userInput' is not in the word. \n";
        $mistakes++;
        if ($mistakes < 3) {
            echo "The word is $hiddenWord\n";
        }
    }
}

if ($hiddenWord === $computerChoice) {
    echo "Congratulations, you guessed the word '$computerChoice'! \n";
} else {
    echo "You lost! The word was '$computerChoice'. \n";
}