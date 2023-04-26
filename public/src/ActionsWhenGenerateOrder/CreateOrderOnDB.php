<?php

namespace Project\DesignPattern\ActionsWhenGenerateOrder;

class CreateOrderOnDB implements \SplObserver
{
    public function update(\SplSubject $order): void
    {
        echo "Saving order on database";
    }
}