<?php
namespace App\CadenaResponsbilidad;

class FiftyBillDispenser extends OperationAbstract
{
    public function process(Transaction $transaction){
        if($transaction->getAmount() < 50){
            $this->next($transaction);
            return;
        }
        $bills = intval($transaction->getAmount() / 50);
        $remain = $transaction->getAmount() % 50;
        echo "Entrega de billetes de 50 €: {$bills}<br>";
        if($remain !== 0){
            $transaction->setAmount($remain);
            $this->next($transaction);
        }
    }
}
