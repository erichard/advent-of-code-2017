<?php

use Aoc\PassphraseChecker;

require __DIR__.'/../vendor/autoload.php';

$checker = new PassphraseChecker();

$phrases = explode("\n", $argv[1]);
$phrasesCount = count($phrases);
$validSimple = 0;
$validAnagram = 0;
foreach ($phrases as $phrase) {
    $validSimple += $checker->isValidPassphraseSimple($phrase) ? 1 : 0;
    $validAnagram += $checker->isValidPassphraseAnagram($phrase) ? 1 : 0;
}

echo "\n1st result is: $validSimple/$phrasesCount";
echo "\n";
echo "2nd result is: $validAnagram/$phrasesCount";
echo "\n";
