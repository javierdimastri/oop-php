<?php

class Zero
{
    private array $properties = [];

    public function __get($name)
    {
        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function __isset($name)
    {
        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Join call $name with arg: $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Join static call $name with arg: $join" . PHP_EOL;
    }
}

$zero = new Zero();

$zero->firstName = 'Jo';
$zero->middleName = 'JoMidle';
$zero->lastName = 'Last';

echo "First: $zero->firstName, mid: $zero->middleName, las: $zero->lastName" . PHP_EOL;

$zero->sayHello("Jo", 20);
Zero::sayHelloy("static name", 45);