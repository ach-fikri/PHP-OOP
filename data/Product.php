<?php

/**
 * dalam PHP visibilyti ada tiga tingkatan yaitu public, protected, dan privat.
 * jika provat hanya dapat di akses oleh classnya saja
 * jika protectedd dapat di akses oleh kelasnya dan turunannya
 * jika public dapat di akses di seuanya
 */
class Product
{
    protected string $name;
    protected int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
//function ini diperuntukkan untuk vareabel privat diatas dapat di akses public
    public function getName(): string
    {
        return $this->name;
    }

    public  function getPrice(): int
    {
        return $this->price;
    }

}

class ProductDummy extends Product
{
    public function info(){
        echo "Name $this->name". PHP_EOL;
        echo "Price $this->price". PHP_EOL;
    }
}