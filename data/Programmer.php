<?php

class Programmer
{

    public string $name;

    public function __construct(string $name)
    {
        $this->name=$name;
    }

}

class BEProgrammer extends Programmer
{

}

class FEProgrammer extends Programmer
{

}

class Company
{
    public Programmer $programmer;
}

function sayHelloProgrammer(Programmer $programmer): void
{
    echo "Hello pro $programmer->name" . PHP_EOL;
}