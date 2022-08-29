<?php
namespace Data;

interface Car
{
    function drive(): void;
    function getTire():void;

}

class Avanza implements Car
{
    public function drive(): void
    {
        echo "drive Avanza" . PHP_EOL;
    }

    public function getTire(): void
    {
        return 4;
    }
}