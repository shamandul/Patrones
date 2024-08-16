<?php
namespace App\Builder\Model;

class Pizza
{
    private $size;
    private $dough;
    private $cheese;
    /** @var array <Topping */
    private $toppings = [];
    public function __construct($size, $dough, $cheese, $toppings){
        $this->size = $size;
        $this->dough = $dough;
        $this->cheese = $cheese;
        $this->toppings = $toppings;
    }


    /**
     * Get the value of size
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Get the value of dough
     */
    public function getDough()
    {
        return $this->dough;
    }

    /**
     * Get the value of cheese
     */
    public function getCheese()
    {
        return $this->cheese;
    }

    /**
     * Get the value of toppings
     *
     * @return array <Topping>
     */
    public function getToppings()
    {
        return $this->toppings;
    }
}
