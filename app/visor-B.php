<?php
namespace App;

use App\Builder\Model\Topping;
use App\Builder\PizzaBuider;
use App\Builder\Values\Cheese;
use App\Builder\Values\Toppings;

$pizza = (new PizzaBuider())
->setCheese(Cheese::CHEESE_CHEDDAR)
->setSize('Medium')
->setDough('Regular')
->setToppings(
        [
            new Topping(Toppings::TOPPING_CHICKEN),
            new Topping(Toppings::TOPPING_BELL_PEPPERS),
            new Topping(Toppings::TOPPING_ONION),
            new Topping(Toppings::TOPPING_OLIVES)
        ]
    );
