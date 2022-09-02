<?php
//secara manual
function getGenap (int $max) : Iterator
{
    $array = [];

    for ($i = 1; $i<= $max; $i++){
        if ($i%2==0){
            $array[]=$i;
        }
    }
    return new ArrayIterator($array);
}

foreach (getGenap(100)as $value){
    echo "Genap : $value". PHP_EOL;
}

//menggunakan yield keyword sebagai generator

function getGanjil (int $max) : Iterator
{
    $array = [];

    for ($i = 1; $i<= $max; $i++){
        if ($i%2==1){
            yield $i;
        }
    }

}
foreach (getGanjil(100)as $value){
    echo "Ganjil : $value". PHP_EOL;
}