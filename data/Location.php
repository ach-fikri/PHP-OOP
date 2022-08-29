<?php
namespace Data;
/**
 * abstract class merupakan kelas tidak bisa dijadikan object tapi hanya bisa diturunkan
 * cara membuat class abstract tinggal menambah abstract sebelum membuat class
 */
abstract class Location {
    public string $name;
}

class City extends Location
{

}

class Province extends Location
{

}

class Country extends Location
{

}