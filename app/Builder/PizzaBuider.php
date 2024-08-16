<?php
namespace App\Builder;
use App\Builder\Model\Pizza;

class PizzaBuider
{
    private $size;
    private $dough;
    private $cheese;
    /** @var array <Topping */
    private $toppings;



    /**
     * Set the value of size
     *
     * @return  self
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Set the value of dough
     *
     * @return  self
     */
    public function setDough($dough)
    {
        $this->dough = $dough;

        return $this;
    }

    /**
     * Set the value of cheese
     *
     * @return  self
     */
    public function setCheese($cheese)
    {
        $this->cheese = $cheese;

        return $this;
    }

    /**
     * Set the value of toppings
     *
     * @return  self
     */
    public function setToppings(array $toppings)
    {
        $this->toppings = $toppings;

        return $this;
    }
    public function build(){
        return new Pizza($this->size, $this->dough, $this->cheese, $this->toppings);
    }
}
