<?php
$matches = [];
$result = (bool)preg_match_all("/fikri|awan|edy/i", "Fikriwan Kamulyady", $matches);
var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing, bangsat" );
var_dump($result);

$result = preg_split("/[\s,-]/", "Ach Fikri Belajar, di PHP-OOP");
var_dump($result);