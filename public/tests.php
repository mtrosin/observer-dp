<?php

use Project\DesignPattern\DiscountCalculator;
use Project\DesignPattern\TaxCalculator;
use Project\DesignPattern\Budget;
use Project\DesignPattern\Taxes\Icms;

require 'vendor/autoload.php';

/*$calculator = new TaxCalculator();

$budget = new Budget();
$budget->value = 100;

echo $calculator->calculate($budget, new Icms());*/

$calc = new DiscountCalculator();

$budget = new Budget();
$budget->value = 600;
$budget->amount = 6;

echo $calc->calculateDiscount($budget);