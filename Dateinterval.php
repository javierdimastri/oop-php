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


$parseDateTime = DateTime::createFromFormat(
    "Y-m-d H:i:s", "2023-02-22 00:00:01", new DateTimeZone("Asia/Jakarta")
);
var_dump($parseDateTime);

$dateTimeNowToronto = new DateTime();
$dateTimeNowToronto->setTimezone(new DateTimeZone("America/Toronto"));
var_dump($dateTimeNowToronto);