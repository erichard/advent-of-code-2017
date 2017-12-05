<?php

namespace Aoc;

class SpreadsheetEvenlyDivisibleChecksumCalculator extends SpreadsheetChecksumCalculator
{
    public function checksum(array $spreadsheet): int
    {
        $checksum = 0;
        foreach ($spreadsheet as $row) {
            foreach ($row as $value) {
                foreach ($row as $value2) {
                    if ($value2 === $value) {
                        continue;
                    }

                    if (0 === $value % $value2) {
                        $checksum += (int) ($value / $value2);
                    }
                }
            }
        }

        return $checksum;
    }
}
