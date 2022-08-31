<?php
namespace Data;

/*
 * interface sangat boleh ada yang namanya pewarisan
 * interface juga boleh memiliki banyak parent
 */

use MongoDB\BSON\BinaryInterface;

interface HasBrand
{
    function getBrand():string;
}

interface IsMaintenance
{
    function isMaintenance(): bool;
}

#example
interface Car extends HasBrand
{
    function drive(): void;
    function getTire():int;

}

/**
 * dalam class boleh meng implementasikan banyak interface
 */
class Avanza implements Car, IsMaintenance
{
    public function drive(): void
    {
        echo "drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return "Toyota";
    }

    public function isMaintenance(): bool
    {
        return false;
    }


}