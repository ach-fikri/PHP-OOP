<?php

require_once "Exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = ""; //jika ini dihapus akan error
$loginRequest->password = "";
//
//validateLoginRequest($loginRequest);


try {
    validateLoginRequest($loginRequest);
    echo "VALID". PHP_EOL;
}catch (ValidationException | Exception $exception){
    echo " Error : {$exception->getMessage()}".PHP_EOL;

    var_dump($exception->getTrace());
    echo $exception->getTraceAsString().PHP_EOL;
} finally {
    echo "error atau tidak akan di eksekusi".PHP_EOL;
}
