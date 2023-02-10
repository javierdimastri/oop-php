<?php
include "./data/Conflict.php";
include "./data/Helper.php";

$dataOne = new Data\one\Concflict();
$dataOne = new Data\two\Concflict();

echo Helper\APPLICATION . PHP_EOL;

echo Helper\help() . PHP_EOL;
