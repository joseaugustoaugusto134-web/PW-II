<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Math\PythagoreanTheorem;
use source\Models\Math\Bhaskara;

$pythagoreanTheorem = new PythagoreanTheorem(3, 4);

$pythagoreanTheorem->calculate();

$pythagoreanTheorem->show();

$bhaskara = new Bhaskara(1,-5,6);

$bhaskara->calculate();

$bhaskara->show();