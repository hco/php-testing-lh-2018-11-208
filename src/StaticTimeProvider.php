<?php

namespace TestingWorkshop;


class StaticTimeProvider extends TimeProvider
{
    /**
     * @var int
     */
    private $hour;

    public function __construct(int $hour)
    {
        $this->hour = $hour;
    }

    /**
     * @return int
     */
    public function getHour(): int
    {
        return $this->hour;
    }

}