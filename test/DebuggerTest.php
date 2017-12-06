<?php

use Aoc\Debugger;
use PHPUnit\Framework\TestCase;

class DebuggerTest extends TestCase
{
    public function test_count_step_before_infinite_loop()
    {
        $debugger = new Debugger();

        list($step, $loopSize) = $debugger->countRedistributionStepBeforeInfiniteLoop([0, 2, 7, 0]);

        $this->assertEquals(4, $loopSize);
        $this->assertEquals(5, $step);
    }
}
