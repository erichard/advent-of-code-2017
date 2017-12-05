<?php

namespace Aoc;

class StepCounter
{
    public function getStepCountToAccessPort(int $cell): int
    {
        if (1 === $cell) {
            return 0;
        }

        $maxValue = $squareSize = 1;
        while ($maxValue < $cell) {
            $maxValue = pow($squareSize, 2);
            $squareSize = $squareSize + 2;
        }

        $squareSize = $squareSize - 2;
        $diff = $maxValue - $cell;

        $corner = $maxValue;

        while ($corner > $cell) {
            $corner = $corner - $squareSize + 1;
        }

        $corner = $corner + ($squareSize - 1);

        $stepToMiddle = intval($squareSize - ceil($squareSize / 2));
        $stepToMiddle = abs($corner - $cell - $stepToMiddle);

        return intval($squareSize / 2) + $stepToMiddle;
    }
}
