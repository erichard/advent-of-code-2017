<?php

namespace Aoc;

class CapchaHalfwaySolver extends CapchaSolver
{
    protected function isValidChar($string, $position)
    {
        $halfway = strlen($string) / 2;
        $currentChar = $string[$position];
        $halfwayChar = substr($string, $position - $halfway, 1);

        return $currentChar === $halfwayChar;
    }
}
