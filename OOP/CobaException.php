<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "data/validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = " ";
$loginRequest->password = " ";

try{
    validateLoginrequest($loginRequest);
    echo "VALID" . PHP_EOL;
} catch (ValidationException | Exception $exception) {
    echo "Error : {$exception->getMessage()}" .PHP_EOL;

    var_dump($exception->getTrace());

    echo $exception->getTraceAsString() .PHP_EOL;
} finally {
    echo "EROR atau TIDAK TETAP DI EKSEKUSI" .PHP_EOL;
}


