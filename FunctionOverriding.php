<?php

include 'data/Manager.php';
include 'data/VicePresident.php';

$manager = new Manager();
$manager->name = "budi";
var_dump($manager);

$vp = new VicePresident();
$vp->name = "joko";
$vp->sayHello("budi");
var_dump($vp);

$manager->sayHello("joko");
