<?php

namespace Project\DesignPattern\ActionsWhenGenerateOrder;

class GenerateOrderLog implements \SplObserver
{
    public function update(\SplSubject $order): void
    {
        echo "Generating order created log";
    }
}