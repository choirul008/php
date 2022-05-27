<?php

$dateTime = new DateTime();
$dateTime->setDate(1988, 3, 20);
$dateTime->setTimezone(new DateTimeZone("Asia/Jakarta"));
$dateTime->setTime(10, 10, 10, 0);

$dateTime->add(new DateInterval("P1Y"));

$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$dateTime->add($minusOneMonth);



var_dump($dateTime);

$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone("Asia/Jakarta"));
var_dump($now);

$string = $now->format("Y-m-d H:i:s");
echo "waktu saat ini : $string" . PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2022-02-02 10:10:10", new DateTimeZone("Asia/Jakarta"));
id ($date){
    var_dump($date);
} else{
    echo " Format Salah" . PHP_EOL;
}
