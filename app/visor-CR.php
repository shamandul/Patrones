<?php
namespace App;

require_once "./../vendor/autoload.php";

use App\CadenaResponsbilidad\Transaction;
use App\CadenaResponsbilidad\MultipleOfFifty;
use App\CadenaResponsbilidad\BalanceChecker;
use App\CadenaResponsbilidad\FiveHundredBillDispenser;
use App\CadenaResponsbilidad\FiftyBillDispenser;
use App\CadenaResponsbilidad\OneHundredBillDispenser;
use App\CadenaResponsbilidad\TwoHundredBillDispenser;

//Probar Cadenade responsabilidad

$trasaction = new Transaction();

$trasaction->setAmount(1300);
$trasaction->setBalance(5000);

$multiple = new MultipleOfFifty();
$balance = new BalanceChecker();
$fiveHundred = new FiveHundredBillDispenser();
$twoHundred = new TwoHundredBillDispenser();
// $oneHundred = new OneHundredBillDispenser();
// $fifty = new FiftyBillDispenser();

$multiple->then($balance);
$balance->then($fiveHundred);
$fiveHundred->then($twoHundred);
// $twoHundred->then($oneHundred);
// $oneHundred->then($fifty);

$multiple->process($trasaction);
