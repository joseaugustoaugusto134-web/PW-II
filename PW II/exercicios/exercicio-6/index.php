<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Course\Instructor;
use source\Models\Course\Course;

$instrutor = new Instructor("Mestre em Ciência da Computação", "Careca devido a depressão pós programação", "Chapolin", "AmoPOO@gmail.com", 1);

$instrutor->show();

$curso = new Course(1, "Programação Orientada a Objetos", 40, $instrutor);

$curso->show();