<?php

namespace Project\DesignPattern\Taxes;

use Project\DesignPattern\Budget;

abstract class TaxWith2Percentages implements Tax
{
    public function calculateTax(Budget $budget): float
    {
        if($this->shouldUseMaxTax($budget)) {
            return $this->calculateMaxTax($budget);
        }

        return $this->calculateMinTax($budget);
    }

    abstract protected function shouldUseMaxTax(Budget $budget): bool;
    abstract protected function calculateMaxTax(Budget $budget): float;
    abstract protected function calculateMinTax(Budget $budget): float;
} 