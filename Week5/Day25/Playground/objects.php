<?php

require_once "Address.php";
//require_once "Car.php";
//require_once "Horse.php";
//require_once "Vehicle.php";


$here = new Address;

$here->street = "Krakovska";
$here->house_nr = 9;


var_dump($here);