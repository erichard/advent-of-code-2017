<?php

namespace Aoc;

class SpreadsheetChecksumCalculator
{
    public function getSpreadsheetFromText(string $text): array
    {
        $text = preg_replace('/[ \t]+/', ';', $text);
        $spreadsheet = explode("\n", $text);
        foreach ($spreadsheet as $idx => $row) {
            $spreadsheet[$idx] = str_getcsv($row, ';');
        }

        return $spreadsheet;
    }

    public function checksum(array $spreadsheet): int
    {
        $checksum = 0;
        foreach ($spreadsheet as $row) {
            $checksum += max($row) - min($row);
        }

        return $checksum;
    }
}
