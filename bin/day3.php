<?php

use Aoc\Printer;
use Aoc\StepCounter;

require __DIR__.'/../vendor/autoload.php';

$counter = new StepCounter();
$printer = new Printer();

echo "\n1st result is: ".$counter->getStepCountToAccessPort(289326);
echo "\n";
echo '2nd result is: '.$printer->stressTest(289326);
echo "\n";
