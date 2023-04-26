<?php

namespace Project\DesignPattern\BudgetStates;

use Project\DesignPattern\Budget;

class Approved extends BudgetState
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        return $budget->value * 0.02;
    }

    public function close(Budget $budget)
    {
        $budget->currentState = new Closed();
    }
}