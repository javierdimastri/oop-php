<?php

include "./data/Car.php";
use Data\{Brio};

$brio = new Brio();
$brio->drive();

$brioWheels = $brio->getTire();
echo "Brio ban ada $brioWheels" . PHP_EOL;

$brand = $brio->getBrand();
echo $brand . PHP_EOL;
$isBrioMaintenance = $brio->isMaintenance();
var_dump($isBrioMaintenance);