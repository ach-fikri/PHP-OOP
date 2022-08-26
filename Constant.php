<?php
/**
 * untuk mengakses sebuah constan itu berbeda dengan memanggil properties yang diakses dengan '->'
 * jika constant diakses harus menggunakan '::' dan nilai constan emutable (tidak bisa dirubah)
 */
require_once "data/Person.php";
define("APPLICATION", "Beljar PHP OOP");

const APP_VERSION ="1.0.0"; //contoh pendeklarasian constant

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;

echo Person::AUTHOR . PHP_EOL; // cara memanggil constant harus awali nama class kemudian '::' nama constantnya

