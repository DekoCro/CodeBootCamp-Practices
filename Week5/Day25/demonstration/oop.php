<?php

require_once 'User.php';

$total_users = 0;

$kuba = new User('kubaStrasny');

$kuba->id = 1;
$kuba->name = 'Jakub';


echo "The name of user {$kuba->id} is {$kuba->name}<br>";

$cola = new User('cola');
$cola->name = 'Marko';

$kuba->dumpMe();

$cola->dumpMe();


var_dump($total_users);

unset($kuba);
unset($cola);

var_dump($total_users);