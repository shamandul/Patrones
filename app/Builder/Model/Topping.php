<?php
namespace App\Builder\Model;

class Topping
{
    private $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}
