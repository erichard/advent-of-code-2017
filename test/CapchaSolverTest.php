<?php

namespace Test\Aoc;

use Aoc\CapchaSolver;
use PHPUnit\Framework\TestCase;

class CapchaSolverTest extends TestCase
{
    /**
     * @dataProvider exampleInput
     */
    public function test_it_solve_captcha($input, $expectedResult)
    {
        $solver = new CapchaSolver();

        $this->assertEquals($expectedResult, $solver->solve($input));
    }

    public function exampleInput()
    {
        return [
            ['1122', 3],
            ['1111', 4],
            ['1234', 0],
            ['91212129', 9],
        ];
    }
}
