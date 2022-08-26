<?php

require_once "data/Person.php";

$person = new Person("Fikri", "Panagan");

$person->name = "Fikri";
$person->addres = "Panagan";


var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Addres : $person->addres" .PHP_EOL;
echo "Country : $person->country". PHP_EOL;

$person2 =  new Person("Rina", null);

$person2 ->name = "Rina";
$person2->addres = null;


var_dump($person2);
//error
//$person2 ->name = [];