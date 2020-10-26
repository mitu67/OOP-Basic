<?php

require 'src/city/vehicle.php';
require 'src/Test/bus.php';

use src\Test\Bus;  //obj er ta evabe rakhle sohoj

$obj = new src\Test\Vehicle();  //jotogula obj totogula require
$bus = new Bus();

$obj->fuelAmount();
echo "<br>";
$bus->test();