<?php

namespace Project\DesignPattern;

use Project\DesignPattern\Budget;
use Project\DesignPattern\Discounts\NoDiscount;
use Project\DesignPattern\Discounts\Discount500PlusValue;
use Project\DesignPattern\Discounts\Discount5PlusItems;

class DiscountCalculator
{
    public function calculateDiscount(Budget $budget): float
    {
        $discountChain = new Discount5PlusItems(
            new Discount500PlusValue(
                new NoDiscount()
            )
        );

        return $discountChain->calculateDiscount($budget);
    }
}