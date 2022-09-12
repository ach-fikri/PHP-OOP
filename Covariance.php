<?php
require_once "data/Animal.php";
require_once "data/AnimalShelater.php";

$catShalter =  new \Data\CatShelter();
$cat = $catShalter->adopt("luna");
$cat->eat(new \Data\AnimalFood());

$dogshelter = new \Data\DogShelter();
$dog = $dogshelter->adopt("sino");
$dog->eat(new \Data\Food());