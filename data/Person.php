<?php

/**
 *
 */

class  Person
{
    const AUTHOR = "BELAJAR CODING OOP";

    var string $name;
    var ?string $addres = null;
    var string $country = "Indonesia";

    function __construct(string $name, ?string $address){
        $this->name = $name;
        $this->addres = $address;
    }

    /*
     * $this digunakan untuk mengakses object saat ini
     */
    function  sayHello(?string $name){
        if (is_null($name)){
            echo "Hi, my name is $this->name".PHP_EOL;
        }else{
            echo "Hi $name, my name is $this->name". PHP_EOL;
        }
    }

    /**
     * untuk mengakses sebuah Constant dalam class yang sama tidak perlu menggunakana NamaClass::Constant
     * kita bisa menggunakan yang namanya 'self' tampa harus menyebutkan nama classnya lagi
     */
    #berikut contohnya
    function info(){
        echo "Author : ". self::AUTHOR . PHP_EOL;
    }

    /**
     *Function destructor
     */
    function __destruct()
    {
        echo "Objek Person $this->name is desroyed".PHP_EOL;
    }
}