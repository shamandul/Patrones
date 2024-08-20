<?php
namespace Test\StrategyTest;

use App\Strategy\FixedAmountDiscountStrategy;
use App\Strategy\Models\Product;
use App\Strategy\NoDiscoutStrategy;
use App\Strategy\OrderProcessor;
use App\Strategy\PercentageDiscountStrategy;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testDiscountStrategy($processor, $expectedFinalPrice){
        $product = new Product('MacBooK Pro M3', 4000);
        $finalPrice = $processor->calculateFinalPrice($product);
        self::assertEquals($expectedFinalPrice, $finalPrice);
    }

    public static function dataProvider(){
        yield 'No discount' => [
            'processor' => new OrderProcessor(new NoDiscoutStrategy()),
            'expectedFinalPrice' => 4000,
        ];
        yield 'Porcentage discount' => [
            'processor' => new OrderProcessor(new PercentageDiscountStrategy(10)),
            'expectedFinalPrice' => 3600,
        ];
        yield 'Fixed discount' => [
            'processor' => new OrderProcessor(new FixedAmountDiscountStrategy(200)),
            'expectedFinalPrice' => 3800,
        ];
        yield 'Fixed discount greater  than products price' => [
            'processor' => new OrderProcessor(new FixedAmountDiscountStrategy(5000)),
            'expectedFinalPrice' => 0,
        ];
    }
}
