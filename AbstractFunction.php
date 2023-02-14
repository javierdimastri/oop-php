<?php

include "./data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "nupnup";
$cat->run();

$dog = new Dog();
$dog->name = "jaiv";
$dog->run();