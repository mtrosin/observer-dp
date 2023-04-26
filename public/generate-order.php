<?php
use Project\DesignPattern\{GenerateOrderHandler, GenerateOrder};

require_once 'vendor/autoload.php';

$budgetValue = $argv[1];
$itemAmount = $argv[2];
$clientName = $argv[3];

$generateOrder = new GenerateOrder($budgetValue, $itemAmount, $clientName);
$generateOrderHandler = new GenerateOrderHandler();
$generateOrderHandler->addActionWhenCreatedOrder(new \Project\DesignPattern\ActionsWhenGenerateOrder\CreateOrderOnDB());
$generateOrderHandler->addActionWhenCreatedOrder(new \Project\DesignPattern\ActionsWhenGenerateOrder\SendOrderByMail());
$generateOrderHandler->addActionWhenCreatedOrder(new \Project\DesignPattern\ActionsWhenGenerateOrder\GenerateOrderLog());
$generateOrderHandler->execute($generateOrder);