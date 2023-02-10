<?php

include "./data/Conflict.php";
include "./data/Helper.php";

use Data\one\Concflict as firstConflict;
use Data\two\Concflict as secondConflict;
use function Helper\help as justHelp;

$conflictOne = new firstConflict();
$conflictTwo = new secondConflict();

justHelp();