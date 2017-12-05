<?php

namespace Aoc;

class CpuMaze
{
    public function stepToExit($chain)
    {
        $step = 0;
        $offset = 0;
        while (true) {
            if (!isset($chain[$offset])) {
                break;
            }

            $currentOffset = $offset;

            $offset += $chain[$offset];

            ++$chain[$currentOffset];

            ++$step;
        }

        return $step;
    }

    public function stepToExitStranger($chain)
    {
        $step = 0;
        $offset = 0;
        while (true) {
            if (!isset($chain[$offset])) {
                break;
            }

            $currentOffset = $offset;

            $offset += $chain[$offset];

            if ($chain[$currentOffset] >= 3) {
                --$chain[$currentOffset];
            } else {
                ++$chain[$currentOffset];
            }

            ++$step;
        }

        return $step;
    }
}
