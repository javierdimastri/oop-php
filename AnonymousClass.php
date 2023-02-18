<?php

interface HelloWorld {
    function sayHelloWorld(): void;
}

$helloWorld = new class('Anonymous Name') implements HelloWorld{

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    
    function sayHelloWorld(): void
    {
       echo "Hello $this->name" . PHP_EOL;
    }
};

$helloWorld->sayHelloWorld();