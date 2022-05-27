<?php

$matches = [];

$result = preg_match_all("/choi|anam|ren/i", "Choirul Anam Keren", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/kampret|anjing|kuda/i", "****", "dasar anjing dan kuda!");
var_dump($result);

$result = preg_split("/[\s,-]/", "Choirul Anam Keren, Proggrammer-keren");
var_dump($result);