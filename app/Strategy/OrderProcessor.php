<?php
namespace App\Strategy;

class OrderProcessor
{
    private $strategy;
    public function __construct(DiscountProduct $strategy){
        $this->strategy = $strategy;
    }
    public function setDiscountStrategy($strategy){
        $this->strategy = $strategy;
    }
    public function calculateFinalPrice($products){
        $discount = $this->strategy->calculateDiscount($products);
        return $products->getPrice() - $discount;
    }
}
