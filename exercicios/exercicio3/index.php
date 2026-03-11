<?php


require __DIR__ . "/../../source/autoload.php";

use source\Models\Faq\Employee;

$employee = new Employee(1, "joseph", 1000);

$employee->raise(10);

$employee->show();