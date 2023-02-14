<?php

class Manager
{
    var string $name;
    var string $title;

    public function __construct(string $name = '', string $title = 'manager'){
        $this->name = $name;
        $this->title=$title;
    }

    function sayHello(string $name): void
    {
        echo "Manager: Hi $name, my Name is $this->name" . PHP_EOL;
    }

}