<?php

namespace Project\DesignPattern\ActionsWhenGenerateOrder;

class SendOrderByMail implements \SplObserver
{
    public function update(\SplSubject $order): void
    {
        echo $order->order->clientName;
        echo "Sending order created e-mail";
    }
}