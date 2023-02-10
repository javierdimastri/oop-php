<?php

class ProductExtends extends Product
{
    public function info(){
        echo "Name: $this->name" . PHP_EOL;
        echo "Name: $this->price" . PHP_EOL;
    }
}