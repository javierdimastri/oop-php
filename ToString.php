<?php

include "./data/Student.php";

$firstStudent = new Student();
$firstStudent->name = "Name stu";
$firstStudent->age = 30;
$firstStudent->id = 1;

$toStringStudent = (string) $firstStudent;

//langsung echo asal ada __toString
echo $firstStudent . PHP_EOL;

//dikonversi ke tos tring var asal ada __toString
echo $toStringStudent . PHP_EOL;