<?php

namespace Aoc;

class Printer
{
    public function stressTest(int $value): int
    {
        $current = 1;
        $matrice = [[1]];
        $i = $j = 0;

        while ($current <= $value) {
            if ($i === $j && 0 === $i) {
                $nextX = $i + 1;
                $nextY = $j;
            } elseif ($i === $j && isset($matrice[$i][$j - 1])) {
                $nextX = $i - 1;
                $nextY = $j;
            } elseif ($i === $j && isset($matrice[$i][$j + 1])) {
                $nextX = $i + 1;
                $nextY = $j;
            } elseif ($i > $j && isset($matrice[$i - 1][$j]) && !isset($matrice[$i][$j + 1])) {
                $nextX = $i;
                $nextY = $j + 1;
            } elseif ($i > $j && isset($matrice[$i - 1][$j]) && isset($matrice[$i][$j + 1])) {
                $nextX = $i + 1;
                $nextY = $j;
            } elseif ($i < $j && isset($matrice[$i][$j - 1]) && isset($matrice[$i + 1][$j])) {
                $nextX = $i - 1;
                $nextY = $j;
            } elseif ($i < $j && isset($matrice[$i][$j + 1]) && isset($matrice[$i + 1][$j])) {
                $nextX = $i;
                $nextY = $j - 1;
            } elseif ($i < $j && isset($matrice[$i][$j + 1]) && !isset($matrice[$i + 1][$j])) {
                $nextX = $i + 1;
                $nextY = $j;
            } elseif ($i < $j && !isset($matrice[$i][$j - 1]) && isset($matrice[$i + 1][$j])) {
                $nextX = $i;
                $nextY = $j - 1;
            }

            $current = $this->sum($matrice, $nextX, $nextY);

            $matrice[$nextX][$nextY] = $current;
            $i = $nextX;
            $j = $nextY;
        }

        return $current;
    }

    private function sum($matrice, $i, $j)
    {
        $sum = 0;
        if (isset($matrice[$i - 1])) {
            $sum += (isset($matrice[$i - 1][$j]) ? $matrice[$i - 1][$j] : 0)
                + (isset($matrice[$i - 1][$j + 1]) ? $matrice[$i - 1][$j + 1] : 0)
                + (isset($matrice[$i - 1][$j - 1]) ? $matrice[$i - 1][$j - 1] : 0)
            ;
        }
        if (isset($matrice[$i])) {
            $sum += (isset($matrice[$i][$j]) ? $matrice[$i][$j] : 0)
                + (isset($matrice[$i][$j + 1]) ? $matrice[$i][$j + 1] : 0)
                + (isset($matrice[$i][$j - 1]) ? $matrice[$i][$j - 1] : 0)
            ;
        }
        if (isset($matrice[$i + 1])) {
            $sum += (isset($matrice[$i + 1][$j]) ? $matrice[$i + 1][$j] : 0)
                + (isset($matrice[$i + 1][$j + 1]) ? $matrice[$i + 1][$j + 1] : 0)
                + (isset($matrice[$i + 1][$j - 1]) ? $matrice[$i + 1][$j - 1] : 0)
            ;
        }

        return  $sum;
    }
}
