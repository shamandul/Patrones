<?php
namespace App\Strategy;

use App\Strategy\Models\Product;

interface DiscountProduct
{
    public function calculateDiscount(Product $product);
}
