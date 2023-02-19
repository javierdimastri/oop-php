<?php

include "./data/Student.php";

$firstStudent = new Student();
$firstStudent->name = "Name stu";
$firstStudent->age = 30;
$firstStudent->id = 1;
$firstStudent->setSample("sample");

var_dump($firstStudent);

$secondStudent = clone ($firstStudent);
var_dump($secondStudent);