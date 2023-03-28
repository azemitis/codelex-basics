<?php
/** Spēlē tiek ģenerēts laukums ar 4x3 elementiem. Spēles noteiktumi diktē ka simboli,
 * kas atrodas noteiktās pozīcijās veido spēles līniju, un uzvarošu kombināciju,
 * par kuru spēlētājs saņem virtuālu naudu savā kontā.
 *
 * Board with slots. Board size. Lines. Each line with the same slots give us $.
 */

// Display a random board
function spinBoard(array $board, array $symbols): array
{
    $newBoard = [];
    for ($row = 0; $row < 3; $row++) {
        $newBoard[$row] = [];
        for ($index = 0; $index < 4; $index++) {
            $symbolIndex = rand(0, count($symbols) - 1);
            $newBoard[$row][$index] = $symbolIndex;
        }
    }
    return $newBoard;
}

$lines = [
    [[0, 0], [0, 1], [0, 2], [0, 3]],
    [[1, 0], [1, 1], [1, 2], [1, 3]],
    [[2, 0], [2, 1], [2, 2], [2, 3]],
    [[0, 0], [1, 1], [2, 2], [2, 3]],
    [[0, 3], [1, 2], [2, 1], [2, 0]]
];

$board = [
    [3, 1, 1, 1],
    [1, 3, 2, 1],
    [1, 1, 3, 3]
];

$symbols = [
    ['value' => 'A', 'price' => 5],
    ['value' => 'K', 'price' => 4],
    ['value' => 'Q', 'price' => 3],
    ['value' => 'J', 'price' => 2],
    ['value' => '10', 'price' => 1]
];

$playerCash = 10;

do {
    $userInput = readline("Spin? (yes/no) ");

    if ($userInput === "no") {
        break;
    }

    if ($playerCash == 0) {
        echo "Game over. You don't have enough cash to spin." . PHP_EOL;
        break;
    }

    $playerCash -= 1;

    $board = spinBoard($board, $symbols);

    // Check for winning lines and calculate cash won
    $winningAmount = 0;
    foreach ($lines as $line) {
        $uniqueSymbols = [];
        foreach ($line as $slot) {
            $symbolIndex = $board[$slot[0]][$slot[1]];
            $uniqueSymbols[$symbolIndex] = $symbols[$symbolIndex];
        }
        if (count($uniqueSymbols) === 1) {
            $symbol = reset($uniqueSymbols);
            $winningAmount += $symbol['price'];
        }
    }

// Display the board and the cash won
    foreach ($board as $row) {
        foreach ($row as $slot) {
            echo $symbols[$slot]['value'] . ',';
        }
        echo PHP_EOL;
    }

    if ($winningAmount > 0) {
        echo "You won $winningAmount dollars!" . PHP_EOL;
        $playerCash += $winningAmount;
    } else {
        echo "Sorry, you didn't win anything." . PHP_EOL;
    }

    echo "Player cash: $playerCash $" . PHP_EOL;

    if ($playerCash == 0) {
        echo "Game over. You don't have enough cash to spin." . PHP_EOL;
        break;
    }
} while (true);