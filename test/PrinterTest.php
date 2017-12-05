<?php

namespace Test\Aoc;

use Aoc\Printer;
use PHPUnit\Framework\TestCase;

class PrinterTest extends TestCase
{
    /**
     * @dataProvider exampleInput
     */
    public function test_it_pass_stress_test($input, $expectedResult)
    {
        $printer = new Printer();

        $this->assertEquals($expectedResult, $printer->stressTest($input));
    }

    public function exampleInput()
    {
        return [
            ['1', 2],
            ['2', 4],
            ['4', 5],
            ['5', 10],
            ['10', 11],
            ['23', 25],
            ['362', 747],
        ];
    }
}
