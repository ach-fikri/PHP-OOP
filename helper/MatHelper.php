<?php

namespace  Helper;

class MatHelper
{
    static public string $name = "MatHelper";

    static public function sum(int... $number):int
    {
        $total = 0;
        foreach ($number as $numbers)
        {
            $total += $numbers;
        }
        return $total;
    }
}