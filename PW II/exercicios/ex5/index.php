<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Hospital\Patient;
use source\models\Hospital\Doctor;

$patient = new Patient("20/10/2000", "sla tlgd");
$doctor = new Doctor("121312", "cardiologista");


