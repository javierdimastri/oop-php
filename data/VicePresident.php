<?php

class VicePresident extends Manager{

    function sayHello(string $name): void
    {
        echo "VP: Hi $name, my Name is $this->name" . PHP_EOL;
    }
}