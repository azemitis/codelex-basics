<?php

/**
 * Create a program that creates an account with the balance of 100.0, deposits 20.0 and prints the account.
 *
 * Note! do all the steps described in the exercise exactly in the described order!
 * Your first money transfer
 *
 * Create a program that:
 *
 * Creates an account named "Matt's account" with the balance of 1000
 * Creates an account named "My account" with the balance of 0
 * Withdraws 100.0 from Matt's account
 * Deposits 100.0 to My account
 * Prints both accounts
 *
 * Money transfers
 *
 * In the above program, you made a money transfer from one person to another.
 * Let us next create a method that does the same!
 *
 * Create the method:
 *
 * function transfer(Account $from, Account $to, int $howMuch) { }
 *
 * The method transfers money from one account to another.
 * ou do not need to check that from account has enough balance.
 *
 * After completing the above, make sure that your main method does the following:
 *
 * Creates an account "A" with the balance of 100.0
 * Creates an account "B" with the balance of 0.0
 * Creates an account "C" with the balance of 0.0
 * Transfers 50.0 from account A to account B
 * Transfers 25.0 from account B to account C
 */


class Account
{
    public string $name;
    public float $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function withdrawal(float $withdraw): void
    {
        $this->balance = $this->balance - $withdraw;
        echo "{$this->name}'s balance after {$withdraw} withdrawal is: " .
            number_format($this->balance, 2) . PHP_EOL;
    }

    public function deposit(float $deposit): void
    {
        $this->balance = $this->balance + $deposit;
        echo "{$this->name}'s balance after {$deposit} deposit is: " .
            number_format($this->balance, 2) . PHP_EOL;
    }

    public function transfer(Account $from, Account $to, float $howMuch): void
    {
        $transferDetails = "Transferred {$howMuch} from {$from->name} to {$to->name}" . PHP_EOL;
        echo $transferDetails;
        $from->withdrawal($howMuch);
        $to->deposit($howMuch);
    }
}

// Matt's account
$accountMatt = new Account("Matt's account", 1000.0);
$myAccount = new Account("My account", 0.0);

echo "{$accountMatt->name}'s starting balance is: " .
    number_format($accountMatt->balance, 2) . PHP_EOL;
echo "{$myAccount->name}'s starting balance is: " .
    number_format($myAccount->balance, 2) . PHP_EOL;

$accountMatt->withdrawal(100.0);
$myAccount->deposit(100.0);

echo PHP_EOL;

// Transfers A, B, C
echo "Transfers among A, B, and C accounts" . PHP_EOL;

$accountA = new Account("A", 100.0);
$accountB = new Account("B", 0.0);
$accountC = new Account("C", 0.0);

echo "{$accountA->name}'s account's starting balance is: " .
    number_format($accountA->balance, 2) . PHP_EOL;
echo "{$accountB->name}'s account's starting balance is: " .
    number_format($accountB->balance, 2) . PHP_EOL;
echo "{$accountC->name}'s account's starting balance is: " .
    number_format($accountC->balance, 2) . PHP_EOL;

$accountA->deposit(20.0);

$accountA->transfer($accountA, $accountB, 50.0);
$accountB->transfer($accountB, $accountC, 25.0);