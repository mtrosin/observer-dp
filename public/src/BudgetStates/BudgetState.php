<?php

namespace Project\DesignPattern\BudgetStates;

use Project\DesignPattern\Budget;

abstract class BudgetState
{
    /**
     * @throws \DomainException
     */
    abstract public function calculateExtraDiscount(Budget $budget): float;

    public function approve(Budget $budget) 
    {
        throw new \DomainException('This budget cannot be approved');
    }

    public function reprove(Budget $budget) 
    {
        throw new \DomainException('This budget cannot be reproved');
    }

    public function close(Budget $budget) 
    {
        throw new \DomainException('This budget cannot be closed');
    }
}