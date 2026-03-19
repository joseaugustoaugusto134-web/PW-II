<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Hospital\Patient;
use source\models\Hospital\Doctor;

$patient = new Patient("20/10/2000", "sla tlgd", "Josias", "Josias@gmail.com", 1, "josiasomelhor", "fotodeperfildojosias.jpeg");
$doctor = new Doctor("121312", "cardiologista", "Doutor Matias", "DoutorMatiasCuraTudo@gmail.com", 1, "MatiasODoutor", "FotoDeMatias.png");

$patient->show();
$doctor->show();