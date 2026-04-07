<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Banking\BankAccount;
use source\Models\Banking\SavingsAccount;
use source\Models\Banking\Transaction;

$conta1 = new BankAccount(1, "Enrico Capivara", "0001-2", 00,"1234");
$savingAccount = new SavingsAccount(2, "Enrico Capivara", "0001-2", 00, "1234", 0.50, date('Y-m-d h:i:s'));


$conta1->deposit(1500);
$conta1->withdraw(500, "1236");
$conta1->withdraw(500, "1234");
$conta1->show();
echo "<br>" . "<br>";


$savingAccount->applyYield(100);
$savingAccount->show();

var_dump($conta1);
