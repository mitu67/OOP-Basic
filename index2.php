<?php

require 'vendor/autoload.php';


use App\Test\Bus;  //obj er ta evabe rakhle sohoj...test folder

$obj = new App\city\Vehicle();  //jotogula obj totogula require...city folder
$bus = new Bus();
$truck = new App\Truck();

$obj->fuelAmount();
echo "<br>";
$bus->fuelAmount();  // bus inherit korse test er vehicle k/city er vehicle k
echo "<br>";
$truck->_construct();


