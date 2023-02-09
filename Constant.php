<?php
include "./data/Person.php";

const VERSION = "4.2.3";

echo VERSION . PHP_EOL;

// constant live in  class not object
echo Person::AUTHOR . PHP_EOL;

