<?php

namespace Data;
/**
 * untuk melakukan pembuatan abstrack function harus menambah kata abstract dan kemudian nama functionnya
 * dan function abstract tidak boleh menggunakan Visibility prvate
 * function abstrack hanya bisa dideklarasikan di kelas abtract
 */
abstract class Animal
{
    public string $name;

    abstract public function run(): void;
}

class Cat extends Animal
{
    public function run(): void
    {
       echo "Cat $this->name is running" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run(): void
    {
        echo "Dog $this->name is running". PHP_EOL;
    }
}