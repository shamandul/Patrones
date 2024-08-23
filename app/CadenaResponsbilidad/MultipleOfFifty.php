<?php
namespace App\CadenaResponsbilidad;

class MultipleOfFifty extends OperationAbstract
{
    public function process(Transaction $transaction){
        if($transaction->getAmount() % 50 !== 0){
            echo "La cantidad debe ser múltiplo de 50 <br>";
            return;
        }
        $this->next($transaction);
    }
}
