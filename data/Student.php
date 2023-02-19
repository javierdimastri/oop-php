<?php

class Student
{
    public string $id;
    public string $name;
    public int $age;
    private string $sample;

    public function setSample(string $sample): void
    {
        $this->sample = $sample;
    }

    public function __clone()
    {
     unset($this->sample);
    }

    public function __toString(): string
    {
     return "Student id: $this->id, name: $this->name, age: $this->age";
    }

    public function __invoke(...$arguments) : void
    {
        $join = join(",", $arguments);
        echo "Invoke argument with join $join" . PHP_EOL;
    }
}