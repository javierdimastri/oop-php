<?php

include "./data/Person.php";

$person = new Person("my Name", "kalibata");
//$person ->name = "my name";
//$person ->address = "kalibata";
$person ->country = "indo";
var_dump($person);

echo "Name: $person->name" . PHP_EOL;

$secondPerson = new Person("Budi", null);
$secondPerson->name = "Budi";
$secondPerson->address = null;
$secondPerson->country = "India";

var_dump($secondPerson);