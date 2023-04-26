<?php

namespace Project\DesignPattern\Taxes;

use Project\DesignPattern\Budget;

class Ikcv extends TaxWith2Percentages
{
    protected function shouldUseMaxTax(Budget $budget): bool
    {
        return $budget->value > 300 && $budget->amount > 3;
    }

    protected function calculateMaxTax(Budget $budget): float
    {
        return $budget->value * 0.04;
    }

    protected function calculateMinTax(Budget $budget):float
    {
        return $budget->value * 0.025;
    }
} 