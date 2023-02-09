<?php

class Person
{
    var string $name;
    var ?string $address = null;
    var string $country;
    const AUTHOR = "me now";

    function sayHello(string $paramName): void
    {
        echo "Hello $paramName" . PHP_EOL;
    }

    function sayHelloWithThis(?string $paramName): void
    {
        if(is_null($paramName)){
            echo "Hy my name is $this->name".PHP_EOL;
        }
        else{
            echo "Hy $paramName, this Object Name is $this->name".PHP_EOL;
        }
    }

    function getAuthorInfo(): void
    {
        echo "Author: " . self::AUTHOR . PHP_EOL;
    }

    public function __construct(string $name, ?string $address){
        $this->name = $name;
        $this->address = $address;
    }

    public function __destruct(){
        echo "Object person $this->name is destroy" . PHP_EOL;
    }
}