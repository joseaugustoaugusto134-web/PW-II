<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Game\Wizard;
use source\Models\Game\Warrior;
use source\Models\Game\Thief;

$mago = new Wizard(70, "Robertson Greenfeet", 38, 120, 25);

$mago->describe();

$guerreiro = new Warrior(80, "Ferguson Hardwood", 150, 50, 100);

$guerreiro->describe();

$ladino = new Thief(100, "Huguinho Ligeiro", 60, 60, 40);

$ladino->describe();