<?php

require_once "data/Animal.php";
require_once "data/AnimalShelter.php";
require_once "data/Food.php";

$catshelter = new \data\CatShelter();
$cat = $catshelter->adopt("Luna");

$cat->eat(new \data\AnimalFood());

$dogshelter = new data\DogShelter();
$dog = $dogshelter->adopt("Doggy");

$dog->eat(new \data\Food());