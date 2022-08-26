<?php
/**
 * utuk mengakse function yang menjadi properti dalam object bisa menggnukan tanda '->'
 */

require_once "data/Person.php";

$person = new Person("Rina", "Panagan"); //$person adalah object
$person->name = "Rina";
$person->sayHello("Fikri");

$fik =  new Person("fIKRI", null);
$fik->name = "fikri";
$fik->sayHello(null);

$person->info();