<?php

namespace Project\DesignPattern\Discounts;

use Project\DesignPattern\Budget;
use Project\DesignPattern\Discounts\Discount;

class NoDiscount extends Discount
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function calculateDiscount(Budget $budget): float
    {
        return 0;
    }
}