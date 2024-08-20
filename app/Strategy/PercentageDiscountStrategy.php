<?php
namespace App\Strategy;

use App\Strategy\Models\Product;

class PercentageDiscountStrategy implements DiscountProduct
{
    private $percentage;
    public function __construct($percentage){
        $this->percentage = $percentage;
    }
    public function calculateDiscount(Product $product)
    {
        return ($product->getPrice() * $this->percentage) / 100;
    }
}
