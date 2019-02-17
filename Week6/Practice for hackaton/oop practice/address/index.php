<?php

require_once "Address.php";

$here = new Address;

$here->street = 'Krakovská';
$here->house_nr = 9;


var_dump($here);