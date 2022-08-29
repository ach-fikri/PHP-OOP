<?php
require_once "data/Conflik.php";
require_once "data/Helper.php";

$Conflict1 = new \Data\One\Conflik();
$conflik2 =  new \Data\Two\Conflik();

#cara memanggil function atau constant yang ada di namespace
echo Helper\APLICATION . PHP_EOL;