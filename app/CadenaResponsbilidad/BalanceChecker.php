<?php
namespace App\CadenaResponsbilidad;

class BalanceChecker extends OperationAbstract
{
    public function process(Transaction $transaction){
        if($transaction->getBalance() < $transaction->getAmount()){
            echo "El balance no es suficiente <br>";
            return;
        }
        $this->next($transaction);
    }
}
