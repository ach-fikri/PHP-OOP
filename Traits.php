<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, sayHello, sayGoodBye};

$person = new Person();
$person->Hello("Fikri");
$person->goodBye("Budi");

$person->name = "FIkri";
var_dump($person);

$person->run();