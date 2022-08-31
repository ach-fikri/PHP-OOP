<?php

interface HelloWord
{
    function sayHello(): void;
}

$helloword = new class ("fikri")implements HelloWord{

    public string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};

$helloword->sayHello();