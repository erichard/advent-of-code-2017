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
        $words = array_map(function ($word) {
            $word = str_split($word, 1);
            sort($word);
            return join('', $word);
        }, $words);

        $wordsCount = count($words);

        $uniqueWords = array_unique($words);
        $uniqueWordsCount = count($uniqueWords);

        return $wordsCount === $uniqueWordsCount;
    }
}
