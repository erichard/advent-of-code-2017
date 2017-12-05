<?php

namespace Test\Aoc;

use Aoc\SpreadsheetChecksumCalculator;
use PHPUnit\Framework\TestCase;

class SpreadsheetChecksumCalculatorTest extends TestCase
{
    /**
     * @dataProvider exampleInput
     */
    public function test_it_calculate_checksum_from_spreadsheet($input, $expectedResult)
    {
        $calculator = new SpreadsheetChecksumCalculator();
        $spreadsheet = $calculator->getSpreadsheetFromText($input);

        $this->assertEquals($expectedResult, $calculator->checksum($spreadsheet));
    }

    public function exampleInput()
    {
        return [
            [
'5  1   9   5
7   5   3
2   4   6   8', 18, ],
        ];
    }
}
