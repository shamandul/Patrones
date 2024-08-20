<?php
namespace App\Strategy;

use App\Strategy\Models\Product;

class NoDiscoutStrategy implements DiscountProduct
{
    public function calculateDiscount(Product $product)
    {
        return 0.0;
    }
}
