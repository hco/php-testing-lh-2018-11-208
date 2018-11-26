<?php

namespace TestingWorkshop;


class Calculator
{
    public function sum(int $a, int $b): int
    {
        return $a + $b;
    }

    /**
     * @return float|int
     */
    public function divide(int $a, int $b)
    {
        if($b === 0) {
            throw new DivisionByZeroException();
        }
        return $a / $b;
    }
}