<?php

require_once "data/Conflik.php";
require_once "data/Helper.php";

/**
 * kata kunci use digunakan untuk meng import nama class , function atau contant dalam satu namaspace agar ketika kita membuat sebuah objek tidak perlu menulis namespacenya berkali kali
 * akan tetapi jika class yang dipanggil itu sama meski name spacenya bebrbeda dia akan tetap error
 */
use Data\One\Conflik;
use function Helper\helpMe;
use const Helper\APLICATION;

$conflik1 = new Conflik(); //contoh yang sudah menggunakan import
$conflik2 = new \Data\Two\Conflik();

helpMe();
echo APLICATION . PHP_EOL;