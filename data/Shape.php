<?php
namespace Data;

class Shape
{
    public function getCorner()
    {
        return 0;
    }
}

class Rectangle extends Shape
{
    public function getCorner()
    {
        return 4;
    }
//untuk mengakses function yang sudah mengalami overaiding bisa menggunakan kata 'parent :: nama function'
    public function getParentCorner()
    {
        return parent::getCorner();
    }

}