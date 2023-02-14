<?php

include "./data/Category.php";

use Data\Category;

$category = new Category();
$category->setName("Phone");
$category->setExpensive(true);

echo "Name: {$category->getName()}" . PHP_EOL;
$isExpensive = $category->isExpensive() ? "Yes" : "No";

echo "Expensive: {$isExpensive}" . PHP_EOL;