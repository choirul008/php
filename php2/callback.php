<?php

// callback
function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

// anonymous fn
sayHello("Choirul", function ($name) {
    return strtoupper($name);
}); 
// arrow fn
sayHello("Choirul", fn($name) => strtoupper($name));

sayHello("Choirul", "strtoupper");
sayHello("Choirul", "strtolower");