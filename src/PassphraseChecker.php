<?php

namespace Aoc;

class PassphraseChecker
{
    public function isValidPassphraseSimple($phrase)
    {
        $words = explode(' ', $phrase);
        $wordsCount = count($words);

        $uniqueWords = array_unique($words);
        $uniqueWordsCount = count($uniqueWords);

        return $wordsCount === $uniqueWordsCount;
    }

    public function isValidPassphraseAnagram($phrase)
    {
        $words = explode(' ', $phrase);
        $wordsCount = count($words);

        $uniqueWords = array_unique($words);
        $uniqueWordsCount = count($uniqueWords);

        return $wordsCount === $uniqueWordsCount;
    }
}
