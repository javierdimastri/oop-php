<?php

include './data/AnimalShelter.php';

$catShelter = new \Data\CatShelter();
$catShelter->adopt("Nyinyi");
$catShelter->hearTheSound();

$dogShelter = new \Data\DogShelter();
$dogShelter->adopt("Dog");
$dogShelter->hearTheSound();
