<?php

class Person
{
    var string $name;
    var ?string $address = null;
    var string $country;

    function sayHello(string $paramName){
        echo "Hello $paramName" . PHP_EOL;
    }

    function sayHelloWithThis(?string $paramName){
        if(is_null($paramName)){
            echo "Hy my name is $this->name".PHP_EOL;
        }
        else{
            echo "Hy $paramName, this Object Name is $this->name".PHP_EOL;
        }
    }
}