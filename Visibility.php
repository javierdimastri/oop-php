<?php
include "./data/Product.php";
include "./data/ProductExtends.php";

$product = new Product("manga", 30000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$extendProduct = new ProductExtends("extend", 0);
$extendProduct->info();
