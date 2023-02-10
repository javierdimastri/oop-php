<?php

include 'data/Manager.php';
include 'data/VicePresident.php';

$manager = new Manager();
$manager->name = "budi";

$vp = new VicePresident();
$vp->name = "joko";
$vp->sayHello("budi");

$manager->sayHello("joko");
