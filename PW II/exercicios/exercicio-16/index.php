<?php

require __DIR__ . "../../../source/autoload.php";

use source\Models\School\Teacher;
use source\Models\School\Student;
use source\Models\School\Course;
use source\Models\School\Enrollment;

$teacher1 = new Teacher(1, "Pezildo Andarilho", "pezildo@gmail.com", "Trilhas");
$teacher2 = new Teacher(2, "Enrico Marmota", "EnriMarmota@gmail.com", "Amamentar");

$student1 = new Student(1, "Abobado", "abobadinho@gmail.com", "2026001");
$student2 = new Student(2, "Relaxado", "relaxadilson@gmail.com", "2024006");

$course1 = new Course(1, "Trilhagem Trigonométrica", "INF-3AT-2026", 80, $teacher1);
$course2 = new Course(2, "Amamentação Social", "INF-1AT-2026", 120, $teacher2);

$enrollment = new Enrollment(1,);