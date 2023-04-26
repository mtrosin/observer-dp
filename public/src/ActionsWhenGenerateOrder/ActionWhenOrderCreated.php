<?php

namespace Project\DesignPattern\ActionsWhenGenerateOrder;

use Project\DesignPattern\Order;

interface ActionWhenOrderCreated
{
    public function executeAction(Order $order): void;
}