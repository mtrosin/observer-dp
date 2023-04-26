<?php

namespace Project\DesignPattern\Taxes;

use Project\DesignPattern\Budget;

class Icpp extends TaxWith2Percentages
{
    protected function shouldUseMaxTax(Budget $budget): bool
    {
        return $budget->value > 500;
    }

    protected function calculateMaxTax(Budget $budget): float
    {
        return $budget->value * 0.03;
    }

    protected function calculateMinTax(Budget $budget):float
    {
        return $budget->value * 0.02;
    }
}