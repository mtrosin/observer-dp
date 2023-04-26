<?php

namespace Project\DesignPattern;

use Project\DesignPattern\Order;
use SplObserver;

class GenerateOrderHandler implements \SplSubject
{
    private array $actionsAfterGeneratedOrder = [];
    public Order $order;

    public function __construct(/* OrderRepository, MailService */)
    {
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

        $this->order = $order;
        $this->notify();
    }

    public function attach(SplObserver $observer)
    {
        $this->actionsAfterGeneratedOrder = $observer;
    }

    public function detach(SplObserver $observer)
    {
        
    }

    public function notify()
    {
        foreach($this->actionsAfterGeneratedOrder as $action){
            $action->update($this);
        }
    }
}