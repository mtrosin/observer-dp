<?php

namespace Project\DesignPattern\ActionsWhenGenerateOrder;

use Project\DesignPattern\Order;

class CreateOrderOnDB implements ActionWhenOrderCreated
{
    public function executeAction(Order $order): void
    {
        echo "Saving order on database";
    }
}