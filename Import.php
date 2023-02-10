<?php

include "./data/Helper.php";
include "./data/Conflict.php";

use Data\one\Concflict;
use function Helper\help;
use const Helper\APPLICATION;

$dataOne = new Concflict();
$dataTwo = new Data\two\Concflict();

help();

echo APPLICATION . PHP_EOL;