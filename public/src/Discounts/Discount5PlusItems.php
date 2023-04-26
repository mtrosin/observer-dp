<?php

namespace Project\DesignPattern\Discounts;

use Project\DesignPattern\Budget;
use Project\DesignPattern\Discounts\Discount;

class Discount5PlusItems extends Discount
{
    public function calculateDiscount(Budget $budget): float
    {
        if($budget->amount > 5) {
            return $budget->value * 0.1;
        }

        return $this->nextDiscount->calculateDiscount($budget);
    }
}