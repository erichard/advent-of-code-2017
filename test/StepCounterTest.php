<?php

namespace Test\Aoc;

use Aoc\StepCounter;
use PHPUnit\Framework\TestCase;

class StepCounterTest extends TestCase
{
    /**
     * @dataProvider exampleInput
     */
    public function test_it_count_step_from_data_to_access_port($input, $expectedResult)
    {
        $counter = new StepCounter();

        $this->assertEquals($expectedResult, $counter->getStepCountToAccessPort($input));
    }

    public function exampleInput()
    {
        return [
            ['1', 0],
            ['12', 3],
            ['16', 3],
            ['23', 2],
            ['1024', 31],
        ];
    }
}
