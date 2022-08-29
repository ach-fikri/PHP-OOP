<?php

require_once "data/Conflik.php";
require_once "data/Helper.php";

/**
 * use group ini digunakan ketika kita mau mengimport banyak class, function atau constan dalam satu namespce bisa menggunakan import gorup ini.
 * cara untuk melakukan import group yaitu dengan menggunakan use kemudian nama namespacenya setealah itu buka, tutuo kurung kurawa
 */

use Data\One\{Conflik as Conflict1, Dummy, Sample};
use function Helper\{helpMe};
use const Helper\{APLICATION};

$conflict = new Conflict1();
$dummy = new Dummy();
$sample = new Sample();