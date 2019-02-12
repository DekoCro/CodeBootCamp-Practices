<?php

require_once 'MoneyPenny/BondCase.php';


$name = 'James';

$name .= ' Bond';

$bond_info = [
    'first_name' => 'James',
    'last_name' => 'Bond',
    'gun' => 'Walther PPK',
    'car' => 'Aston Martin',
    'enemy' => 'Stavro Blofeld',
    'relationship_status' => 'widower',
    'cases' => 24,
    'last case' => 'Spectre'
];

echo "My name is " .$bond_info['last_name'] . ". " . $name;

echo "<br>One day when I was driving my ".$bond_info['car']. " in the Alps ".$bond_info['enemy']. " came along and made me a ".$bond_info['relationship_status']." . If only I had my ".$bond_info['gun']. " with me!";

use MoneyPenny\BondCase as Bond;

$new_bond = new Bond(2015);
$new_bond->setName("Spectre");
$new_bond->setEnemy("Ernst Stavro Blofled");

$new_bond->addGirl('Estrella');
$new_bond->addGirl('Lucia Sciarra');
$new_bond->addGirl('Madeleine Swann');

$old_bond = new Bond(2006);
$old_bond->setName("Casino Royale");
$old_bond->setEnemy("Le Chiffre");

$old_bond->addGirl('Vesper Lynd');
$old_bond->addGirl('Solange Dimitrios');

var_dump($new_bond);

var_dump($old_bond);

echo "On average Bond has met " . Bond::getAvgGirlsPerCase() . " girls per case.";