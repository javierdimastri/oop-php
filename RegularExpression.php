<?php

$matches = [];
$result = (bool) preg_match_all("/capT|ain|rika|hulk/i","Captain Amerika", $matches);

var_dump($result);
var_dump($matches);

$kataKasar = "dasar ANjing lu bangsat";

$rudeResult = preg_replace("/anjing|bangsat/i", "***",  $kataKasar);
var_dump($rudeResult);

$splitRegex = preg_split("/[\s,-]/i", "capt ain name,Pro bono right now,to-day");
var_dump($splitRegex);