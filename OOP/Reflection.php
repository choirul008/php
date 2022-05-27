<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "ValidationUtil.php";

$request = new LoginRequest();
$request->username = null;
$request->password = null;

// ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);