<?php

namespace Data;

abstract class Animal {
    public string $name;

    abstract public function run(): void;
}

class Dog extends Animal {

    public function run(): void
    {
        echo "Dog $this->name say woof" . PHP_EOL;
    }
}

class Cat extends Animal {

    public function run(): void
    {
        echo "Cat $this->name say miau" .PHP_EOL;
    }
}