<?php
require_once __DIR__ . '/../vendor/autoload.php';

use NiclasHedam\CPR;

$cpr = new CPR(2412958899);

$cpr->valid(); // returns true;

$cpr->isMale(); // returns true;
$cpr->isFemale(); // returns false;

var_dump($cpr->birthday());
