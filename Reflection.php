<?php

include "./exception/ValidationException.php";
include "./helper/ValidationUtil.php";
include "./data/LoginRequest.php";

$request = new LoginRequest();
$request->userName = "not null";
$request->password = "null";

//ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);

class RegisterUserClass
{
    public ?string $name;
    public ?string $email;
}

$register = new RegisterUserClass();
$register->name = "a";
$register->email = "null";

ValidationUtil::validateReflection($register);