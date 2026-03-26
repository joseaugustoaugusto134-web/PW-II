<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Company\Employee;
use source\Models\Company\Seller;
use source\Models\Company\Manager;

$employee = new Employee(160.00, 50.00, 8000, "Ricardo", "Ricardo@gmail.com", 1);
$employee2 = new Employee(160.00, 50.00, 8000, "Roberto", "Roberto@gmail.com", 2);

$seller = new Seller(5000, 160, 50, 8000, "Fabricio", "Fabricio@gmail.com", 1);

$manager = new Manager(2000, 160, 50, 8000, "Paulo", "Paulo@gmail.com", 1);

$employee->show();

$employee2->show();

$seller->calculateCommission();
$seller->calculateSalary();
$seller->show();

$manager->calculateSalary();
$manager->show();
