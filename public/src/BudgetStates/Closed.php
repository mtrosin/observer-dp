<?php

namespace Project\DesignPattern\BudgetStates;

use Project\DesignPattern\Budget;

class Closed
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        throw new \DomainException('A closed budget cannot receive discount');
    }
}