<?php

namespace Test\Aoc;

use Aoc\CapchaHalfwaySolver;
use PHPUnit\Framework\TestCase;

class CapchaHalfwaySolverTest extends TestCase
{
    /**
     * @dataProvider exampleInput
     */
    public function test_it_solve_captcha($input, $expectedResult)
    {
        $solver = new CapchaHalfwaySolver();

        $this->assertEquals($expectedResult, $solver->solve($input));
    }

    public function exampleInput()
    {
        return [
            ['1212', 6],
            ['1221', 0],
            ['123123', 12],
            ['12131415', 4],
        ];
    }
}
