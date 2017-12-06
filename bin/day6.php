<?php

use Aoc\Debugger;

require __DIR__.'/../vendor/autoload.php';

$debugger = new Debugger();

$chain = explode("\t", $argv[1]);
list($step, $loopSize) = $debugger->countRedistributionStepBeforeInfiniteLoop($chain);

echo "\n1st result is: ".$step;
echo "\n";
echo "\n2nd result is: ".$loopSize;
echo "\n";
