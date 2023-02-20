<?php

$dateTime = new DateTime();
var_dump($dateTime);

$dateUpcomingMonth = $dateTime->add(new DateInterval("P1M"));
var_dump($dateUpcomingMonth);

$dateUpcomingYear = new DateTime();
$dateUpcomingYear->add(new DateInterval("P1Y"));
var_dump($dateUpcomingYear);

$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$dateUpcomingYear->add($minusOneMonth);
var_dump($dateUpcomingYear);

