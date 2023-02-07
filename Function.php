<?php
include "./data/Person.php";

$person = new Person();

$person->sayHello("param");

//this part

$person->name = "PEOPLE";
$person->sayHelloWithThis("this param name");
$person->sayHelloWithThis(null);