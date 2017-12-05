<?php

require __DIR__.'/../vendor/autoload.php';
use Aoc\CapchaHalfwaySolver;
use Aoc\CapchaSolver;

$solver = new CapchaSolver();
$halfwaySolver = new CapchaHalfwaySolver();

echo "\n\n 1st result is: ".$solver->solve($argv[1]);
echo "\n 2nd result is: ".$halfwaySolver->solve($argv[1]);
