<?php

namespace Project\DesignPattern\ActionsWhenGenerateOrder;

use Project\DesignPattern\Order;

class GenerateOrderLog implements ActionWhenOrderCreated
{
    public function executeAction(Order $order): void
    {
        echo "Generating order created log";
    }
}