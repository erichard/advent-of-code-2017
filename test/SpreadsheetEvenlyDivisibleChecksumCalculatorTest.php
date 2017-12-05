<?php

namespace Test\Aoc;

use Aoc\SpreadsheetEvenlyDivisibleChecksumCalculator;
use PHPUnit\Framework\TestCase;

class SpreadsheetEvenlyDivisibleChecksumCalculatorTest extends TestCase
{
    /**
     * @dataProvider exampleInput
     */
    public function test_it_calculate_checksum_from_spreadsheet($input, $expectedResult)
    {
        $calculator = new SpreadsheetEvenlyDivisibleChecksumCalculator();
        $spreadsheet = $calculator->getSpreadsheetFromText($input);

        $this->assertEquals($expectedResult, $calculator->checksum($spreadsheet));
    }

    public function exampleInput()
    {
        return [
            [
'5 9 2 8
9 4 7 3
3 8 6 5', 9, ],
        ];
    }
}
