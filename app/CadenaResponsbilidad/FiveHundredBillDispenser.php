<?php
namespace App\CadenaResponsbilidad;

class FiveHundredBillDispenser extends OperationAbstract
{
    public function process(Transaction $transaction){
        if($transaction->getAmount() < 500){
            $this->next($transaction);
            return;
        }
        $bills = intval($transaction->getAmount() / 500);
        $remain = $transaction->getAmount() % 500;
        echo "Entrega de billetes de 500 €: {$bills} <br>";
        if($remain !== 0){
            $transaction->setAmount($remain);
            $this->next($transaction);
        }
    }
}
