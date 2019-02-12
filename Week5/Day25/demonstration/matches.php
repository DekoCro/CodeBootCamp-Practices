<?php
require_once "Match.php";
require_once "FootballMatch.php";
require_once "icehockey.php";

$match1 = new FootballMatch('2019-02-08 17:30:00');

$match2 = new IceHockeyMatch('2019-02-08 18:30:00');

var_dump($match1);
var_dump($match2);