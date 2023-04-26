<?php

namespace Project\DesignPattern;

use Project\DesignPattern\ActionsWhenGenerateOrder\ActionWhenOrderCreated;

class GenerateOrderHandler
{
    private array $actionsAfterGeneratedOrder = [];

    public function __construct(/* OrderRepository, MailService */)
    {
    }

    public function addActionWhenCreatedOrder(ActionWhenOrderCreated $action)
    {
        $this->actionsAfterGeneratedOrder[] = $action;
    }

    public function execute(GenerateOrder $generateOrder)
    {
        $budget = new Budget();
        $budget->amount = $generateOrder->itemAmount;
        $budget->value = $generateOrder->budgetValue;

        $order = new Order();
        $order->endingDate = new \DateTimeImmutable();
        $order->clientName = $generateOrder->clientName;
        $order->budget = $budget;

        foreach($this->actionsAfterGeneratedOrder as $action) {
            $action->executeAction($order);
        }
    }
}