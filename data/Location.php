<?php

namespace Data;

abstract class Location {
    var string $name;
}

class City extends Location
{
}

class Province extends Location
{
}