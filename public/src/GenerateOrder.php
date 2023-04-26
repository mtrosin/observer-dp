<?php 

namespace Project\DesignPattern;

class GenerateOrder 
{
    private float $budgetValue;
    private int $itemAmount;
    private string $clientName;

    public function __construct(
        float $budgetValue,
        int $itemAmount,
        string $clientName
    ) {
        $this->budgetValue = $budgetValue;
        $this->itemAmount = $itemAmount;
        $this->clientName = $clientName;
    }


    public function getBudgetValue() : float {
        return $this->budgetValue;
    }
    
    public function getItemAmount() : int {
        return $this->itemAmount;
    }
    
    public function getClientName() : string {
        return $this->clientName;
    }
}