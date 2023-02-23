<?php

class ValidationUtil
{
    static function validate(LoginRequest $loginRequest)
    {
        if(!isset($loginRequest->userName))
        {
            throw new ValidationException("username null");
        }
        if(!isset($loginRequest->password))
        {
            throw new ValidationException("username null");
        }
    }

    static function validateReflection($request)
    {
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property)
        {
            if(!$property->isInitialized($request))
            {
                throw new ValidationException("$property->name is not initialized");
            }
            if(is_null($property->getValue($request)))
            {
                throw new ValidationException("$property->name is null");
            }
        }
    }
}