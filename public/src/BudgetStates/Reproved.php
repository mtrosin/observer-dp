<?php

namespace Project\DesignPattern\BudgetStates;

use Project\DesignPattern\Budget;

class Reproved extends BudgetState
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        throw new \DomainException('An reproved budget cannot receive discount');
    }

    public function close(Budget $budget)
    {
        $budget->currentState = new Closed();
    }
}