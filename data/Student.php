<?php

class Student
{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    public function setSample(string $sample) : void
    {
        $this->sample = $sample;
    }

    /**
     * function __clone merupakan function untuk menghapus property yang di cloning
     */
    public function __clone(){
        unset($this->sample);
    }

    /**
     * magic Function
     */
    public function __toString(): string
    {
        return "Student id: $this->id, name : $this->name, value : $this->value ";
    }

    public function __invoke(...$argumnent) : void
    {
        $join = join(",", $argumnent);
        echo "Invoke student with argument $join". PHP_EOL;
    }

    public function __debugInfo(): ?array
    {
        return [
            "id"=>$this->id,
            "name"=>$this->name,
            "value"=>$this->value,
            "sample"=>$this->sample,
            "author"=>"fikri",
            "version"=>"1.0.0"
        ];
    }
}