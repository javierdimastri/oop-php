<?php

include "./data/Student.php";

$firstStudent = new Student();
$firstStudent->name = "Name stu";
$firstStudent->age = 30;
$firstStudent->id = 1;

$firstStudent(1, "Name stu", 30);