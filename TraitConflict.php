<?php

trait A {

    function doA(): void
    {
        echo "doA A" . PHP_EOL;
    }

    function doB(): void
    {
        echo "doB A" . PHP_EOL;
    }
}

trait B {
    function doA(): void
    {
        echo "doA B" . PHP_EOL;
    }

    function doB(): void
    {
        echo "doB B" . PHP_EOL;
    }
}

class Sample
{
    use A, B {
        A::doB insteadof B;
        B::doA insteadof A;
    }
}

$sample = new Sample();
$sample->doA();
$sample->doB();