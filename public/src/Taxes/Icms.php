<?php

namespace Project\DesignPattern\Taxes;

use Project\DesignPattern\Budget;

class Icms implements Tax
{
    public function calculateTax(Budget $budget): float
    {
        return $budget->value * 0.1;
    }
}