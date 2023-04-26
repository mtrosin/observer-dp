<?php

namespace Project\DesignPattern\Taxes;

use Project\DesignPattern\Budget;

interface Tax
{
    public function calculateTax(Budget $budget): float;
}