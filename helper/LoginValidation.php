<?php

function validate(LoginRequest $request)
{
    if (!isset($request->userName) || !isset($request->password)){
        throw new ValidationException("username or password is null");
    }
    if (trim($request->userName) === "" || trim($request->password) === ""){
        throw new Exception("username or password is empty");
    }
    echo "Success Login";
}