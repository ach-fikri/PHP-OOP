<?php

require_once "data/Student.php";
/**
 * dalam perbandingan object ada yang namanya equals (==) dam edentity (===)
 * klo equals memastikan bahwa semua properti dari object tersebut sama atau tidak
 * sedangkan identity dia akan memastikan bahwa object tsb merupakan object yg sama
 */
$student1 = new Student();
$student1->id = "1";
$student1->name = "Fikri";
$student1->value = 100;

$student2 = new Student();
$student2->id = "1";
$student2->name = "Fikri";
$student2->value = 100;

var_dump($student1 == $student2);
var_dump($student1 === $student2);