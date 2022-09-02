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

}