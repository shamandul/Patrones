<?php
namespace App\Strategy;

use App\Strategy\Models\Product;

class FixedAmountDiscountStrategy implements DiscountProduct
{
    private $amount;
    public function __construct($amount){
        $this->amount = $amount;
    }
    public function calculateDiscount(Product $product)
    {
        return min($this->amount, $product->getPrice());
    }
}

