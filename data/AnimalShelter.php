<?php

namespace Data;
include 'Animal.php';

interface AnimalShelter
{
    function adopt(string $name): Animal;
    function hearTheSound();
}

class CatShelter implements AnimalShelter
{

    function adopt(string $name): Cat
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }

    function hearTheSound()
    {
        echo "miaw" . PHP_EOL;
    }
}

class DogShelter implements AnimalShelter
{

    function adopt(string $name): Dog
    {
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }

    function hearTheSound()
    {
        echo "woof" . PHP_EOL;
    }
}