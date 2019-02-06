<?php

/* 

TASK1

function add_item(&$array, $item)
{
    return $array[] = $item;
}

$array = [];

var_dump(add_item($array, "andy"));
var_dump(add_item($array, "andy"));
var_dump(add_item($array, "andy"));


var_dump($array);


TASK2

function element($name, $innerhtml, $attributes)
{
    echo "<{$name} {$attributes}>{$innerhtml}</{$name}>";
}

var_dump(element("h1", "Anđelko Lav", "class='man'"));

*/

// TASK 3

function convert_weight($value, $unit)
{
    if($unit === 'kg'){
        echo $value * 2.20462262;
    } elseif($unit === 'lb'){
        echo $value * 0.45359237;
    } else {
        echo 'undefined unit';
    }
}

var_dump(convert_weight(79, 'kg'));