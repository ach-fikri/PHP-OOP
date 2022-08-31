<?php

namespace Data\Traits;

trait sayGoodBye
{
    function goodBye (?string $name): void
    {
        if (is_null($name)){
            echo "Good bye".PHP_EOL;
        }else{
            echo "Good bye $name" . PHP_EOL;
        }
    }
}

trait sayHello
{
    function Hello (?string $name): void
    {
        if (is_null($name)){
            echo "Hello".PHP_EOL;
        }else{
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

trait CanRun
{
    public abstract function run(): void;
}

/**
 * traits inheritance
 */

trait All
{
    use sayGoodBye, sayHello, HasName, CanRun{
        //bisa mengoveraid visibilyti
//        Hello as private;
//        goodBye as private;
    }
}

class ParentPerson
{
    public function goodBye(?string $name): void
    {
        echo "Good bye in person".PHP_EOL;
    }
    public function Hello(?string $name) : void
    {
        echo "Hello in person".PHP_EOL;
    }
}

/**
 * jika terdapat nama class yang sama di traits dan class maka apabila class itu ada di parent class maka otomatis akan di overaid oleh si traits,
 * namu jika ada di anak class maka traits yang akan di overaid
 */
class Person extends ParentPerson
{
    use All;
    public function run(): void
    {
     echo "Person $this->name is running". PHP_EOL;
    }


}
