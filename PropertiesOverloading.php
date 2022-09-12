<?php
class Zero{
    private array $properties = [];

    public function __get(string $name)
    {
     return $this->properties[$name];
    }

    public function __set(string $name, $value): void
    {
       $this->properties[$name]= $value;
    }

    public function __isset(string $name): bool
    {
        return isset($this->properties[$name]);
    }

    public function __unset(string $name)
    {
      unset($this->properties[$name]);
    }

    public function __call(string $name, array $arguments)
    {
        $join = join(",", $arguments);
        echo "Call function $name with argument $join".PHP_EOL;
    }

    public static function __callStatic(string $name, array $arguments)
    {
      $join = join(",", $arguments);
      echo "Call static function $name with argument $join".PHP_EOL;
    }

}
$zero = new Zero();
//$zero->firstname = "fikri";
//echo $zero->midlename . PHP_EOL;
//isset($zero->firstname);
//unset($zero->firstname);
//
$zero->firstname="ach";
$zero->midlename = "fikri";
$zero->lastname = "rina";

echo "first name $zero->firstname".PHP_EOL;
echo "midle name $zero->midlename".PHP_EOL;
echo "last name $zero->lastname".PHP_EOL;

$zero->sayhello("fikri", "rina");
$zero::sayhello("fikri", "Rin");