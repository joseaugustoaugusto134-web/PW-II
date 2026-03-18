<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Faq\Type;
use source\Models\Faq\Question;


$question = new Question(1, "yes or no?", "yes", 1);
$question2 = new Question(2, "yes or no?", "no", 2);

$type = new Type(1, "edu");
$type2 = new Type(2, "red");

$question->show();
$question2->show();
$type->show();
$type2->show();


// var_dump($question);
// var_dump($question2);
// var_dump($type);
// var_dump($type2);