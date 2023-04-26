<?php

namespace Project\DesignPattern\Discounts;

use Project\DesignPattern\Budget;
use Project\DesignPattern\Discounts\Discount;

class Discount500PlusValue extends Discount
{
    public function calculateDiscount(Budget $budget): float
    {
        if($budget->value > 500) {
            return $budget->value * 0.05;
        }

        return $this->nextDiscount->calculateDiscount($budget);
    }
}