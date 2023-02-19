<?php

$array = [
    "firstName" => "Mo",
    "secondName" => "bamba",
    "lastName" => "Tri"
];

$object = (object)$array;

var_dump($object);

echo "First Name is $object->firstName" . PHP_EOL;

include './data/Person.php';

$person = new Person("Mo", "Kali");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);
