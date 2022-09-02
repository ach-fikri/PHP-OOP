<?php

$array = [
    "firstname" => "ach",
    "midlename"=> "fikri",
    "lastname"=>"rina"
];
//array dijadikan objek
$objec = (object) $array;
var_dump($objec);
echo "first name :$objec->firstname".PHP_EOL;
echo "midle name :$objec->midlename".PHP_EOL;
echo "last name  :$objec->lastname".PHP_EOL;

//merubah object menjadi array
$arraylagi = (array)$objec;
var_dump($arraylagi);

require_once "data/Person.php";
$person = new Person("Fikri", "Panagan");

$arrayperson = (array) $person;
var_dump($arrayperson);

