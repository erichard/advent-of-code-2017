<?php

use Aoc\CpuMaze;

require __DIR__.'/../vendor/autoload.php';

$cpuMaze = new CpuMaze();

$chain = explode("\n", $argv[1]);

echo "\n1st result is: ".$cpuMaze->stepToExit($chain);
echo "\n";
echo "\n2nd result is: ".$cpuMaze->stepToExitStranger($chain);
