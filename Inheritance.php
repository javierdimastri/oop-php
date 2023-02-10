<?php

include "./data/Manager.php";
include "./data/VicePresident.php";

$manager = new Manager();
$manager->name = "budi";
$manager->sayHello("staff");

$vp = new VicePresident();
$vp->name = "VP";
$vp->sayHello("manager");