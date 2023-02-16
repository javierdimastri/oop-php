<?php

namespace Data;

interface HasBrand{
    function getBrand(): string;
}

interface IsMaintenance
{
    function isMaintenance(): bool;
}

interface Car extends HasBrand {
    function drive(): void;

    function getTire(): int;
}

class Brio implements Car, IsMaintenance {

    function drive(): void
    {
        echo "Mobil jalan" . PHP_EOL;
    }

    function getTire(): int
    {
        return 4;
    }

    function getBrand(): string
    {
       return "This brand is Honda";
    }

    function isMaintenance(): bool
    {
        return true;
    }
}