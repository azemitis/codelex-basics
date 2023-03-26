<?php

/** TIC TAC TOE
Termināli izvadas laukums pēc katras darbības. Spēle norisinās pēc tic tac toe
Kā notiek "ievade?" - Ierakstam piemēram: "0 1" kas nozīmē,
 ka atzīmējas šūna 0 rindā 1 kolonna vai 0 kolonna 1 rinda.
 */


$board = [
    ['_', '_', '_'],
    ['_', '_', '_'],
    ['_', '_', '_']
];

$choices = ['0', 'X'];

$playerOne = 0;
$playerTwo = 1;

$currentPlayer = $playerOne;

printBoard($board);

while (true) {
    $input = readline('Player ' . ($currentPlayer + 1) .
        ' (' . $choices[$currentPlayer] . ') turn (row column): ');

    $inputArray = explode(' ', $input);
    if ((count($inputArray) !== 2)
        || !is_numeric($inputArray[0]) || !is_numeric($inputArray[1])
        || $inputArray[0] > 2 || $inputArray[1] > 2)
    {
        echo "Invalid input. Please enter two space-separated integers.\n";
        continue;
    }
    $row = intval($inputArray[0]);
    $column = intval($inputArray[1]);

    if ($board[$row][$column] != '_') {
        echo "That cell is already taken, choose another one.\n";
        continue;
    }

    $board[$row][$column] = $choices[$currentPlayer];

    printBoard($board);

    if (checkWin($board, $choices[$currentPlayer])) {
        echo "Player " . ($currentPlayer + 1) . " wins!\n";
        break;
    } elseif (checkDraw($board)) {
        echo "It's a draw!\n";
        break;
    }

    $currentPlayer = ($currentPlayer == $playerOne) ? $playerTwo : $playerOne;
}
function printBoard(array $board): void {
    echo "  0 1 2\n";
    for ($i = 0; $i < 3; $i++) {
        echo $i . ' ' . implode('|', $board[$i]) . "\n";
    }
}
function checkWin(array $board, string $player): bool {
        // Rows
        for ($i = 0; $i < 3; $i++) {
            if ($board[$i][0] == $player && $board[$i][1] == $player && $board[$i][2] == $player) {
                return true;
            }
        }

        // Columns
        for ($j = 0; $j < 3; $j++) {
            if ($board[0][$j] == $player && $board[1][$j] == $player && $board[2][$j] == $player) {
                return true;
            }
        }

        // Diagonals
        if ($board[0][0] == $player && $board[1][1] == $player && $board[2][2] == $player) {
            return true;
        }
        if ($board[0][2] == $player && $board[1][1] == $player && $board[2][0] == $player) {
            return true;
        }

        return false;
    }

function checkDraw(array $board): bool {
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            if ($board[$i][$j] == '_') {
                return false;
            }
        }
    }

    if (checkWin($board, '0') || checkWin($board, 'X')) {
        return false;
    }

    return true;
}