<?php

require_once "data/Location.php";

use Data\{Location, City, Province,Country};

//$location = new Location(); ketika dipaksa jadi Object maka akan error

#hanya turunanannya(child class) yang bisa dijadikan object

$city = new City();
$province = new Province();
$country = new Country();