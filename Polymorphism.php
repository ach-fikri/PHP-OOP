<?php
require_once "data/Programmer.php";

$companny =  new Company();
$companny->programmer = new Programmer("Fikri");
var_dump($companny);
$companny->programmer = new BackendProgrammer("fikri");
var_dump($companny);
$companny->programmer = new FrontendProgrammer("fikri");
var_dump($companny);

sayHelloProgrammer(new Programmer("Fikri"));
sayHelloProgrammer(new BackendProgrammer("Fikri"));
sayHelloProgrammer(new FrontendProgrammer("Fikri"));