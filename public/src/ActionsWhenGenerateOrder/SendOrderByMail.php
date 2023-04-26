<?php

namespace Project\DesignPattern\ActionsWhenGenerateOrder;

use Project\DesignPattern\Order;

class SendOrderByMail implements ActionWhenOrderCreated
{
    public function executeAction(Order $order): void
    {
        echo "Sending order created e-mail";
    }
}