<?php
include "./data/Person.php";

$person = new Person("pesonaName", "pesron address");

$person->sayHello("param");

//this part

$person->name = "PEOPLE";
$person->sayHelloWithThis("this param name");
$person->sayHelloWithThis(null);

$person->getAuthorInfo();