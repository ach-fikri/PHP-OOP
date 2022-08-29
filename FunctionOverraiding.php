<?php

require_once "data/Manager.php";

$mamager = new Manager();
$mamager->name ="Fikri";
$mamager->sayHello("Rina");

/**
 * ktika kita melakkan overaiding function di turunan class maka valuenya akan berubah
 * secara tidak langsung akan menimpah function asli yang ada di parent class
 */
$VP =  new VicePresident();
$VP->name ="Rina";
$VP->sayHello("Fikri");