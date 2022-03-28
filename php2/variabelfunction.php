<?php

function anm()
{
    echo "Memanggil Function anm" . PHP_EOL;
}

function bar()
{
    echo "Ini Function bar" . PHP_EOL;
}

$functionyangdipanggil = "anm";
$functionyangdipanggil();

$functionyangdipanggil = "bar";
$functionyangdipanggil();

function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function contohFunction(string $name) : string {
    return " Contoh $name";
}

sayHello("Choirul", "contohFunction");
sayHello("Choirul", "strtoupper");
sayHello("Choirul", "strtolower");

