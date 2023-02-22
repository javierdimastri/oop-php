<?php

include "./data/LoginRequest.php";
include "./exception/ValidationException.php";
include "./helper/LoginValidation.php";

$loginRequest = new LoginRequest();
$loginRequest->userName="";
//$loginRequest->password="";

try {
    validate($loginRequest);
} catch (Exception | ValidationException $exception) {
    echo "Error: {$exception->getMessage()}";
}