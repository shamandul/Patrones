<?php
namespace App\CadenaResponsbilidad;

class OneHundredBillDispenser extends OperationAbstract
{
    public function process(Transaction $transaction){
        if($transaction->getAmount() < 100){
            $this->next($transaction);
            return;
        }
        $bills = intval($transaction->getAmount() / 100);
        $remain = $transaction->getAmount() % 100;
        echo "Entrega de billetes de 100 €: {$bills}<br>";
        if($remain !== 0){
            $transaction->setAmount($remain);
            $this->next($transaction);
        }
    }
}
