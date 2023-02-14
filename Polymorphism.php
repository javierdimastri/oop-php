<?php

include './data/Programmer.php';

$company = new Company();
$company->programmer = new Programmer("prgram");
var_dump($company);

$company->programmer = new BEProgrammer("BE program");
var_dump($company);

$company->programmer = new FEProgrammer("FEPro");
var_dump($company);

sayHelloProgrammer(new Programmer("Pro"));
sayHelloProgrammer(new BEProgrammer("Pro BE"));
sayHelloProgrammer(new FEProgrammer("Pro FE"));