<?php

require_once "Exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once  "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "fikri";
$request->password = "admin";
//ValidationUtil::validate($request);

ValidationUtil::validationReflection($request);

class RegisterUserRequest {
    public ?string $name;
    public ?string $address;
    public ?string $email;
}
$register = new RegisterUserRequest();
$register ->name = "Fikri";
$register->address = "Panagan";
$register->email = "fik@gmail.com";
ValidationUtil::validationReflection($register);