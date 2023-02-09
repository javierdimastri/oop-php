<?php

include "./data/Person.php";

$me = new Person("me", "duren tiga");
$me->country = "Indonesia";
var_dump($me);