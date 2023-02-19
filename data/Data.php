<?php

class Data implements IteratorAggregate
{
    var string $first = "satu";
    var string $second = "dua";
    private string $third = "tiga";
    protected string $fourth = "empat";

//    public function getIterator(): Traversable
//    {
//        $array = [
//            "first" => $this->first,
//            "second" => $this->second,
//            "third" => $this->third,
//            "fourth" => $this->fourth,
//        ];
//
//        return new ArrayIterator($array);
//    }

    public function getIterator(): Traversable
    {
        yield "first" => $this->first;
        yield "second" => $this->second;
        yield "third" => $this->third;
        yield "fourth" => $this->fourth;
    }
}