<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Math\PythagoreanTheorem;

$pythagoreanTheorem = new PythagoreanTheorem(3, 4);

$pythagoreanTheorem->calculate();

$pythagoreanTheorem->show();

