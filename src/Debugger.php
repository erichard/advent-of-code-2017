<?php

namespace Aoc;

class Debugger
{
    public function countRedistributionStepBeforeInfiniteLoop($memory)
    {
        $cache = [join('', $memory) => 1];
        $step = 1;
        $loopSize = 0;

        while ($cache[join('', $memory)] < 3) {
            $maxValue = max($memory);
            $index = array_search($maxValue, $memory);
            $memory[$index] = 0;

            while ($maxValue > 0) {
                if ($index >= count($memory) - 1) {
                    $index = 0;
                } else {
                    ++$index;
                }
                ++$memory[$index];
                --$maxValue;
            }

            if (isset($cache[join('', $memory)])) {
                ++$cache[join('', $memory)];
                ++$loopSize;
            } else {
                $cache[join('', $memory)] = 1;
            }

            ++$step;
        }

        return [$step - $loopSize, $loopSize - 1];
    }
}
