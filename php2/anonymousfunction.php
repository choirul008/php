<?php

$sayHello = function (string $name){
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Choirul");
$sayHello("Anam");

function selamat(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Selamat Jalan $finalName" . PHP_EOL;
}

selamat("Choirul", function (string $name): string {
    return strtoupper($name);
});

$filterfunction = function (string $name): string {
    return strtoupper($name);
};

selamat("Choirul", $filterfunction);

$firstName = "Choirul";
$lastName = "Anam";

$sayHello = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName". PHP_EOL;
};

$sayHello();