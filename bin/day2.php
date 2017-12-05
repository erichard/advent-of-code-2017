<?php

use Aoc\SpreadsheetChecksumCalculator;
use Aoc\SpreadsheetEvenlyDivisibleChecksumCalculator;

require __DIR__.'/../vendor/autoload.php';

$calculator = new SpreadsheetChecksumCalculator();
$calculator2 = new SpreadsheetEvenlyDivisibleChecksumCalculator();
$spreadsheet = $calculator->getSpreadsheetFromText($argv[1]);

echo "\n\n 1st result is: ".$calculator->checksum($spreadsheet);
echo "\n\n 2nd result is: ".$calculator2->checksum($spreadsheet);
