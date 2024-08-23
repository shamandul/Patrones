<?php
namespace App\CadenaResponsbilidad;

class Transaction
{
    private $amount;
    private $balance;

    public function getAmount(){
        return $this->amount;
    }
    public function getBalance(){
        return $this->balance;
    }

    /**
     * Set the value of amount
     *
     * @return  self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Set the value of balance
     *
     * @return  self
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }
}
