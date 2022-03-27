<?php

$names = ["Choirul, Anam, Super"];

for ($i = 0; $i < count($names); $i++) {
    echo "data ke $i = $names[$i]" . PHP_EOL;
}

foreach ($names as $name) {
    echo "Data $name" . PHP_EOL;
}


$persons = [
    "first_name" => "Choirul",
    "middle_name" => "Anam",
    "last_name" => "Super"
];

foreach ($persons as $key => $value) {
    echo " $key : $value" . PHP_EOL;
}

foreach ($persons as $person) {
    echo " Data Nama $person" . PHP_EOL;
}

