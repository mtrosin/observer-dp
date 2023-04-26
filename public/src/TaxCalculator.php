<?php

namespace Project\DesignPattern;

use Project\DesignPattern\Taxes\Tax;

class TaxCalculator
{
    public function calculate(Budget $budget, Tax $tax): float
    {
        return $tax->calculateTax($budget);
    }
}