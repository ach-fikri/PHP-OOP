<?php
class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

}

class BackendProgrammer extends  Programmer{}
class FrontendProgrammer extends Programmer{}
#contoh Polymorphism
class Company{
    public Programmer $programmer;
}

function sayHelloProgrammer(Programmer $programmer){
    //cara melakukan chek type objek adalah data tertentu
    if ($programmer instanceof BackendProgrammer){
        echo "Hello Backend Programmer $programmer->name". PHP_EOL;
    }elseif ($programmer instanceof FrontendProgrammer){
        echo "Hello Frontend Programmer $programmer->name". PHP_EOL;
    }elseif ($programmer instanceof Programmer) {
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
}
