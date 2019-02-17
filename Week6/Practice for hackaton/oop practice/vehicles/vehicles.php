<?php

require_once "Vehicle.php";
require_once "Car.php";
require_once "Horse.php";

$car = new Car;

$car->change_color('red');
$car->avg_speed = 85;

$car->travel(500);

var_dump($car);
var_dump($car->travel(500));