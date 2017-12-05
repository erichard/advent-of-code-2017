<?php

namespace Aoc;

class CapchaSolver
{
    public function solve(string $input): int
    {
        $valid = [];
        for ($i = 0; $i < strlen($input); ++$i) {
            $currentChar = $input[$i];

            if ($this->isValidChar($input, $i)) {
                $valid[] = $currentChar;
            }
        }

        return array_sum($valid);
    }

    protected function isValidChar($string, $position)
    {
        $currentChar = $string[$position];
        $prevChar = 0 === $position ? substr($string, -1) : $string[$position - 1];

        return $prevChar === $currentChar;
    }
}
