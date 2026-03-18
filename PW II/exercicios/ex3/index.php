<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Employee;

$func = new Employee(1, "Joao", 10000000);

$func->raise(10);

$func->show();