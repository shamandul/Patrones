<?php
namespace App\CadenaResponsbilidad;

class TwoHundredBillDispenser extends OperationAbstract
{
    public function process(Transaction $transaction){
        if($transaction->getAmount() < 200){
            $this->next($transaction);
            return;
        }
        $bills = intval($transaction->getAmount() / 200);
        $remain = $transaction->getAmount() % 200;
        echo "Entrega de billetes de 200 €: {$bills} <br>";
        if($remain !== 0){
            $transaction->setAmount($remain);
            $this->next($transaction);
        }
    }
}
