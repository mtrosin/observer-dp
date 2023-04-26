<?php

namespace Project\DesignPattern;

use Project\DesignPattern\BudgetStates\BudgetState;
use Project\DesignPattern\BudgetStates\OnApproval;

class Budget
{
    public int $amount;
    public float $value;
    public BudgetState $currentState;

    public function __construct()
    {
        $this->currentState = new OnApproval();
    }

    public function applyExtraDiscount()
    {
        $this->value -= $this->currentState->calculateExtraDiscount($this);
    }

    public function approve()
    {
        $this->currentState->approve($this);
    }

    public function reprove()
    {
        $this->currentState->reprove($this);
    }

    public function close()
    {
        $this->currentState->close($this);
    }
}