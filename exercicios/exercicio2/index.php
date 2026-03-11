<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Order;

$order = new Order(1, "José", 100);

var_dump($order);

$order->setId(2);
$order->setCustomerName("Augustovisk");
$order->setTotal(1000);

echo "teste de getter com nome do cliente: {$order->getCustomerName()}<br>";

$order->addFee(10);
$order->show();