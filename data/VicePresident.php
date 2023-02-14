<?php

class VicePresident extends Manager{

    public function __construct(string $name = ''){
        parent::__construct($name, "VP");
    }

    function sayHello(string $name): void
    {
        echo "VP: Hi $name, my Name is $this->name" . PHP_EOL;
    }
}