<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Product;

$product = new Product(1, "Mesa de Centro", 1000);

$product->discount(10);

echo "{$product->show()}";

$product->setId(2);


echo "<strong>Id novo: {$product->getId()}";