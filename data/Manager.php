<?php

class Manager
{
    var string $name;

    function sayHello(string $name): void
    {
        echo "Manager: Hi $name, my Name is $this->name" . PHP_EOL;
    }

}