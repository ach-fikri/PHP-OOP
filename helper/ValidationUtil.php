<?php
class ValidationUtil
{
    static function validate(loginRequest $request)
    {
        #pengecekan secara manual
        if (!isset($request->username)) {
            throw new ValidationException("Username not null");
        } elseif (!isset($request->password)) {
            throw new ValidationException("Password not null");
        } elseif (is_null($request->username)) {
            throw new ValidationException("Username is null");
        } elseif (is_null($request->password)) {
            throw new ValidationException("Password is null");
        }
    }
    #Reflection
    /*
     * dengan menggunakan metode ini tidak peduli beberapa properti yang haru di cek
     */
    static function validationReflection($request){
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property) {
          if (!$property->isInitialized($request)){
              throw new ValidationException("$property->name is not set");
          }elseif (is_null($property->getvalue($request))){
              throw new ValidationException("$property->name is null");
          }
        }
    }
}