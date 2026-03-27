<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Vehicles\Owner;
use source\Models\Vehicles\Vehicle;
use source\Models\Vehicles\Car;
use source\Models\Vehicles\Motorcycle;

$owner = new Owner(1, "José", "123.456.789-00", "(11) 98765-4321");

$owner->show();

echo "<br>" . "<br>";

$car = new Car($owner, "ABC123456", "Wolkswagen", "Gol", 1994, 50000, 2, "Gasolina");

$car->show();

echo "<br>" . "<br>";

$motorcycle = new Motorcycle("ABC123456", "Kawasaki", "Ninja", 2016, 15000, $owner, 150);

$motorcycle->show();

