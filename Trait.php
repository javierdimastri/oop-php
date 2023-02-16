<?php

include "./data/SayGoodBye.php";

use Data\Traits\{Person};

$person = new Person();
$person->goodBye("Joko");
$person->hello("Juki");

$person->name = "someone";
var_dump($person);

$person->run();