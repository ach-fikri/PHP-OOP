<?php
require_once "data/Conflik.php";
require_once "data/Helper.php";

/**
 * di PHP dapat erubah nama panggilan dari sebuat function atau class bahkan constan dengan cara memberi alias
 * untuk memberikan alias kita dapat menggunakan kata kunci 'as'
 */
use Data\One\Conflik as Conflict1;
use Data\One\Conflik as Conflict2;
use function Helper\helpMe as help;
use const Helper\APLICATION as APP;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();

help();
echo APP . PHP_EOL;