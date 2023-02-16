<?php

namespace Data\Traits;

trait SayGoodBye {
    function goodBye(?string $name): void
    {
        if (is_null($name)){
            echo "Good bye null" . PHP_EOL;
        }
        if(!is_null($name)){
            echo "Good $name" . PHP_EOL;
        }
    }
}

trait SayHello {
    function hello(?string $name): void
    {
        if (is_null($name)){
            echo "Hello null" . PHP_EOL;
        }
        if(!is_null($name)){
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

trait CanRun
{
    public abstract function run(): void;
}

class Person {
    use SayGoodBye, SayHello, HasName, CanRun;

    public function run(): void
    {
        echo "This $this->name is Running";
    }
}