<?php

include "./data/LoginRequest.php";
include "./exception/ValidationException.php";
include "./helper/LoginValidation.php";

$loginRequest = new LoginRequest();
$loginRequest->userName=" ";
//$loginRequest->password="";

try {
    validate($loginRequest);
} catch (Exception | ValidationException $exception) {
    echo "Error: {$exception->getMessage()}" . PHP_EOL;
    var_dump($exception->getTrace());

    echo $exception->getTraceAsString() . PHP_EOL;
} finally {
    echo "Continue after validate" . PHP_EOL;
}