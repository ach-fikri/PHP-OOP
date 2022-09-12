<?php
$datetime = new DateTime();
$datetime->setDate(2000, 11, 23);
$datetime->setTime(9, 24, 50,0);

$datetime->add(new DateInterval("P1Y"));

$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$datetime->add($minusOneMonth);
var_dump($datetime);

$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone("America/Toronto"));
var_dump($now);

$string = $now->format("Y-m-d H:i:s");
echo $string;

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2021-09-21 10:18:10", new DateTimeZone("Asia/Jakarta"));

if ($date)
{
    var_dump($date);
}else{
    echo "format salah";
}