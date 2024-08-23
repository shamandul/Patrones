<?php
namespace App\CadenaResponsbilidad;

abstract class OperationAbstract
{
    protected $operation;


    public function then(OperationAbstract $operation){
        $this->operation = $operation;
    }
    public function next(Transaction $transaction){
        if($this->operation !== null){
            $this->operation->process($transaction);
        }
    }
    abstract public function process(Transaction $transaction);
}
