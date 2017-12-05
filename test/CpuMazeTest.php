<?php

namespace Test\Aoc;

use Aoc\CpuMaze;
use PHPUnit\Framework\TestCase;

class CpuMazeTest extends TestCase
{
    public function test_it_give_the_step_number_require_to_exit_the_maze()
    {
        $solver = new CpuMaze();

        $this->assertEquals(5, $solver->stepToExit([0, 3, 0, 1, -3]));
    }

    public function test_it_give_the_step_number_require_to_exit_the_stranger_maze()
    {
        $solver = new CpuMaze();

        $this->assertEquals(10, $solver->stepToExitStranger([0, 3, 0, 1, -3]));
    }
}
