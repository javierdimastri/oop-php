<?php

include "./data/Data.php";

$data = new Data();

foreach ($data as $property => $value){
    echo "$property: $value" . PHP_EOL;
}

var_dump($data);
